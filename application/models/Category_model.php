<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

    protected $table = 'tbl_categories';
    protected $primaryKey = 'id';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /**
     * Get all categories
     */
    public function get_all()
    {
        return $this->db->get($this->table)->result();
    }

    /**
     * Get category by ID
     */
    public function get_by_id($id)
    {
        return $this->db->get_where($this->table, [$this->primaryKey => $id])->row();
    }

    /**
     * Get category by name
     */
    public function get_by_name($name)
    {
        return $this->db->get_where($this->table, ['name' => $name])->row();
    }

    /**
     * Create new category
     */
    public function create($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    /**
     * Update category
     */
    public function update($id, $data)
    {
        return $this->db->where($this->primaryKey, $id)->update($this->table, $data);
    }

    /**
     * Delete category
     */
    public function delete($id)
    {
        return $this->db->where($this->primaryKey, $id)->delete($this->table);
    }

    /**
     * Get categories with product count
     */
    public function get_with_product_count()
    {
        $this->db->select('tbl_categories.*, COUNT(tbl_products.id) as product_count');
        $this->db->from($this->table);
        $this->db->join('tbl_products', 'tbl_products.category_id = tbl_categories.id', 'left');
        $this->db->group_by('tbl_categories.id');
        return $this->db->get()->result();
    }

    /**
     * Get dropdown list
     */
    public function get_dropdown()
    {
        $categories = $this->get_all();
        $dropdown = [];
        
        foreach ($categories as $category) {
            $dropdown[$category->id] = $category->name;
        }
        
        return $dropdown;
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Admin Controller
 * Main controller for admin panel
 */
class Admin extends CI_Controller {

    private const HEADER_VIEW = 'templates/admin-layout/header';
    private const SIDEBAR_VIEW = 'templates/admin-layout/sidebar';
    private const FOOTER_VIEW = 'templates/admin-layout/footer';

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
        
        // Check admin login
        // $this->check_admin_login();
    }

    /**
     * Check if admin is logged in
     */
    private function check_admin_login()
    {
        if (!$this->session->userdata('admin_logged_in')) {
            redirect(base_url('admin/login'));
        }
    }

    /**
     * Get common data for views
     */
    private function get_common_data($page_title = 'Dashboard', $active_menu = 'dashboard')
    {
        return [
            'page_title' => $page_title,
            'active_menu' => $active_menu,
            'admin_name' => $this->session->userdata('admin_name') ?? 'Administrator',
            'admin_email' => $this->session->userdata('admin_email') ?? 'admin@shophub.com'
        ];
    }

    /**
     * Load admin view with layout
     */
    private function load_admin_view($view, $data = [])
    {
        $this->load->view(self::HEADER_VIEW, $data);
        $this->load->view(self::SIDEBAR_VIEW, $data);
        $this->load->view($view, $data);
        $this->load->view(self::FOOTER_VIEW, $data);
    }

    /**
     * Dashboard
     */
    public function index()
    {
        $this->load->model(['Transaction_model', 'Product_model', 'Customer_model']);
        
        $data = $this->get_common_data('Dashboard', 'dashboard');
        
        // Get statistics
        $data['total_orders'] = $this->Transaction_model->count_all();
        $data['total_revenue'] = $this->Transaction_model->get_total_revenue();
        $data['total_products'] = $this->Product_model->count_all();
        $data['total_customers'] = $this->db->count_all('tbl_customers');
        
        // Get recent orders
        $data['recent_orders'] = $this->Transaction_model->get_paginated(5, 0);
        
        $this->load_admin_view('admin/dashboard', $data);
    }

    /**
     * Dashboard alias
     */
    public function dashboard()
    {
        $this->index();
    }

    /**
     * Products Management
     */
    public function products()
    {
        $this->load->model('Product_model');
        
        $data = $this->get_common_data('Products', 'products');
        $data['products'] = $this->Product_model->get_all_with_category();
        
        $this->load_admin_view('admin/products', $data);
    }

    /**
     * Categories Management
     */
    public function categories()
    {
        $this->load->model('Category_model');
        
        $data = $this->get_common_data('Categories', 'categories');
        $data['categories'] = $this->Category_model->get_all();
        
        $this->load_admin_view('admin/categories', $data);
    }

    /**
     * Orders Management
     */
    public function orders()
    {
        $this->load->model('Transaction_model');
        
        $data = $this->get_common_data('Orders', 'orders');
        $data['orders'] = $this->Transaction_model->get_all_with_customer();
        
        $this->load_admin_view('admin/orders', $data);
    }

    /**
     * Customers Management
     */
    public function customers()
    {
        $this->load->model('Customer_model');
        
        $data = $this->get_common_data('Customers', 'customers');
        $data['customers'] = $this->Customer_model->get_all();
        
        $this->load_admin_view('admin/customers', $data);
    }

    /**
     * Settings
     */
    public function settings()
    {
        $this->load->model('Setting_model');
        
        $data = $this->get_common_data('Settings', 'settings');
        $data['settings'] = $this->Setting_model->get_all();
        
        $this->load_admin_view('admin/settings', $data);
    }

    /**
     * Transactions Management
     */
    public function transactions()
    {
        $this->load->model('Transaction_model');
        
        $data = $this->get_common_data('Transactions', 'transactions');
        $data['transactions'] = $this->Transaction_model->get_all_with_customer();
        
        // Get counts by status
        $data['completed'] = $this->db->where('status', 'completed')->count_all_results('tbl_transactions');
        $data['pending'] = $this->db->where('status', 'pending')->count_all_results('tbl_transactions');
        $data['processing'] = $this->db->where('status', 'processing')->count_all_results('tbl_transactions');
        $data['cancelled'] = $this->db->where('status', 'cancelled')->count_all_results('tbl_transactions');
        
        $this->load_admin_view('admin/transactions', $data);
    }

    /**
     * Admin Login Page
     */
    public function login()
    {
        if ($this->session->userdata('admin_logged_in')) {
            redirect(base_url('admin'));
        }
        
        $this->load->view('admin/login');
    }

    /**
     * Process Admin Login
     */
    public function do_login()
    {
        $this->load->model('Admin_model');
        
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        $admin = $this->Admin_model->verify_login($username, $password);
        
        if ($admin) {
            $this->session->set_userdata([
                'admin_logged_in' => true,
                'admin_id' => $admin->id,
                'admin_name' => $admin->name,
                'admin_email' => $admin->email,
                'admin_role' => $admin->role ?? 'admin'
            ]);
            redirect(base_url('admin'));
        } else {
            $this->session->set_flashdata('error', 'Invalid username or password');
            redirect(base_url('admin/login'));
        }
    }

    /**
     * Admin Logout
     */
    public function logout()
    {
        $this->session->unset_userdata(['admin_logged_in', 'admin_id', 'admin_name', 'admin_email', 'admin_role']);
        $this->session->set_flashdata('success', 'You have been logged out');
        redirect(base_url('admin/login'));
    }
}

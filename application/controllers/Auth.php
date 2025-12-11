<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Customer_model');
        $this->load->library('session');
    }

    /**
     * Login page
     */
    public function login()
    {
        // If already logged in, redirect to home
        if ($this->session->userdata('customer_logged_in')) {
            redirect(base_url());
        }

        // Handle POST login
        if ($this->input->method() === 'post') {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            // Try to find customer by email
            $customer = $this->Customer_model->verify_login($username, $password);

            if ($customer) {
                // Set session
                $this->session->set_userdata([
                    'customer_logged_in' => true,
                    'customer_id' => $customer->id,
                    'customer_name' => $customer->customer_name,
                    'customer_email' => $customer->email,
                    'user_logged_in' => true,  // For header.php compatibility
                    'user_name' => $customer->customer_name,
                    'user_email' => $customer->email
                ]);

                // Redirect to intended page or home
                $redirect_url = $this->session->userdata('redirect_after_login');
                if ($redirect_url) {
                    $this->session->unset_userdata('redirect_after_login');
                    redirect($redirect_url);
                } else {
                    redirect(base_url());
                }
            } else {
                // Login failed
                $this->session->set_flashdata('error', 'Invalid email or password');
                redirect(base_url('login'));
            }
        }

        // Show login page
        $this->load->view('pages/login');
    }

    /**
     * Logout
     */
    public function logout()
    {
        // Clear all session data
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }

    /**
     * Register page
     */
    public function register()
    {
        // If already logged in, redirect to home
        if ($this->session->userdata('customer_logged_in')) {
            redirect(base_url());
        }

        // Handle POST register
        if ($this->input->method() === 'post') {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $confirm_password = $this->input->post('confirm_password');

            // Validation
            if (empty($name) || empty($email) || empty($password)) {
                $this->session->set_flashdata('error', 'All fields are required');
                redirect(base_url('register'));
            }

            if ($password !== $confirm_password) {
                $this->session->set_flashdata('error', 'Passwords do not match');
                redirect(base_url('register'));
            }

            if ($this->Customer_model->email_exists($email)) {
                $this->session->set_flashdata('error', 'Email already registered');
                redirect(base_url('register'));
            }

            // Create customer
            $customer_id = $this->Customer_model->create([
                'customer_name' => $name,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT)
            ]);

            if ($customer_id) {
                $this->session->set_flashdata('success', 'Registration successful! Please login.');
                redirect(base_url('login'));
            } else {
                $this->session->set_flashdata('error', 'Registration failed. Please try again.');
                redirect(base_url('register'));
            }
        }

        // Show register page
        $this->load->view('pages/register');
    }

    /**
     * Check login status (AJAX)
     */
    public function check()
    {
        header('Content-Type: application/json');
        
        echo json_encode([
            'logged_in' => $this->session->userdata('customer_logged_in') === true,
            'customer_id' => $this->session->userdata('customer_id'),
            'customer_name' => $this->session->userdata('customer_name')
        ]);
    }
}

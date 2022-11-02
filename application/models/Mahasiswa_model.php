<?php

class Mahasiswa_model extends CI_model
{

    public function getAllMahasiswa()
    {
        // cara panjangnya
        // $query = $this->db->get('db_mhs');
        // return $query->result_array();
        return $this->db->get('tb_mhs')->result_array(); // menjadikan returnnya menjadi array


        // join 3 table
        // $this->db->select('p.id_product, p.product_name, p.price, p.discount, c.category, b.brand_name, p.description, p.spesification, p.picture, p.begin_date, p.end_date, p.qty')
        //     ->from('tbl_product as p, tbl_category as c, tbl_brand as b')
        //     ->where('p.id_Category = c.id_Category')
        //     ->where('p.id_brand = b.id_brand')
        //     ->where('id_product', $id_product);
        // $query = $this->db->get();
        // return $query;

        // join 3 table
        // $this->db->select('*');
        // $this->db->from('tbl_product');
        // $this->db->join('tbl_category', 'tbl_category.id_category = tbl_products.id_category');
        // $this->db->join('tbl_brand', 'tbl_brand.id_brand = tbl_products.id_brand', 'inner');
        // $this->db->where('id_product', $id_product);
        // $query = $this->db->get();
        // return $query;
    }
}

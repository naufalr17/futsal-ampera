<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Transaksi_detail_model extends CI_Model
{

	function get_jam_mulai_terpakai($tanggal, $lapangan_id)
	{
		$this->db->select('jam_mulai, durasi, jam_selesai');
		$this->db->where('tanggal', $tanggal);
		$this->db->where('lapangan_id', $lapangan_id);
		return $query = $this->db->get('transaksi_detail')->result();

		// $sql = "
		// 		SELECT
		// 			jam_mulai, durasi, jam_selesai
		// 		FROM futsal_transaksi_detail
		// 		where
		// 			tanggal = ? and lapangan_id = ?
		// 		";
		// $query = $this->db->query($sql, array($tanggal, $lapangan_id));
		//
		// return $query->result();
	}

	public function get_all()
	{
		$this->db->select('transaksi_detail.*, transaksi.status');
		$this->db->from('transaksi_detail');
		$this->db->join('transaksi', 'transaksi.id_trans = transaksi_detail.trans_id');
		$this->db->where('transaksi.status', '2'); // Filter for status 2
		$query = $this->db->get();

		return $query->result();
	}
}

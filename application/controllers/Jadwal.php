<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Jadwal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Transaksi_detail_model');
        // $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('front/home/jadwal_booking');
    }

    /**
     * Get events for the calendar
     */

    public function get_events()
    {
        $details = $this->Transaksi_detail_model->get_all();
        $events = [];

        foreach ($details as $detail) {
            if (!$detail->tanggal || !$detail->jam_mulai) continue;

            $start = $detail->tanggal . 'T' . $detail->jam_mulai;

            if ($detail->jam_selesai) {
                $end = $detail->tanggal . 'T' . $detail->jam_selesai;
            } elseif ($detail->durasi) {
                $start_time = new DateTime($detail->jam_mulai);
                $start_time->modify("+{$detail->durasi} minutes");
                $end = $detail->tanggal . 'T' . $start_time->format('H:i:s');
            } else {
                $end = $start;
            }

            $title = $detail->nama_lapangan . ' - ' . $detail->username;

            $events[] = [
                'title' => $title,
                'start' => $start,
                'end'   => $end,
            ];
        }

        header('Content-Type: application/json');
        echo json_encode($events);
        // var_dump($detail->jam_mulai);
    }
}

<?php

class MY_Controller extends CI_Controller {

    function tmp() {
        // Provera da li je korisnik prijavljen
        if (!$this->ion_auth->logged_in()) {
            redirect('auth', 'refresh');
        } else {
            //uzimanje podataka o korisniku
            $data['user'] = $this->ion_auth->user()->row();
            //$data['moduli'] = explode(",", $data['user']->moduli);
            // print_r($moduli);

            // if (in_array("3", $moduli)) {
            //     echo "Tacno";
            // } else {
            //     echo "Nema";
            // }
        }

        // Podesavanje url adresa
        $data['url'] = site_url();
        $data['assets'] = base_url() . 'assets/';

        // Uzima podatke o modulima
        // $data['moduli'] = $this->modul_model->get_all();
        // $aktivni_modul = $this->uri->segment(1);
        // $data['modul'] = $this->modul_model->get_one_by_url($aktivni_modul);
        //
        //
        // $data['sva_podesavanja']    = $this->podesavanja_model->get_all();
        //
        // $data['all_sluzbe']         = $this->oj_model->all_sluzbe();
        // $data['all_radnik']         = $this->oj_model->all_radnik();
        // $data['all_radnomesto']     = $this->oj_model->all_radnomesto();
        //

        $data['url_klasa'] = $this->uri->segment(1, 'index');  
        $data['url_funkcija'] = $this->uri->segment(2, 'index');  
        $data['url_id'] = $this->uri->segment(3, 'index');   




        return $data;
    }

    // function podesavanja($naziv) {
    //     //$data['sva_podesavanja'] = $this->podesavanja_model->get_all();
    //     $rezultat = $this->podesavanja_model->get_one_by_name($naziv);

    //     return $rezultat['vrednost'];
    // }

}

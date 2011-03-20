<?php

class Plantdata extends Controller
{
    function index()

    {
        $data=array();
        
        if($query = $this->db_model->get_records())
        {
            $data['records'] = $query;
        }
         $this->load->view('options_view', $data);
    }

    function create()
    {
        $data = array(
            'family' => $this->input->post('family'),
            'genus' => $this->input->post('genus'),
            'species' => $this->input->post('species'),
            'PlantType' => $this->input->post('PlantType'),
        );
        $this->db_model->add_record($data);
        $this->index();  //send user back to plant records page
    }
}

?>

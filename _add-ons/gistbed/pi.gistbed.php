<?php

class Plugin_gistbed extends Plugin
{

	public function embed()
	{
        $id = $this->fetchParam('id', null);

        if($id)
        {
        	return '<script src="https://gist.github.com/mrtopher/' . $id . '.js"></script>';
        }
	}

}
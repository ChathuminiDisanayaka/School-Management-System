<?php

/**
 * Patrons
 */
Class Patrons extends Controller
{
    public function index()
    {
        if(!Auth::logged_in())
        {
            $this->redirect('login');
        }
        $patron = new Patron();
        $data = $patron ->findAll();

        $crumbs[] = ['Dashboard',''];
        $crumbs[] = ['Patrons','patrons'];


        $this->view('patrons',[
            'rows'=>$data,
            'crumbs'=>$crumbs,
        ]);
    }

    public function add()
    {
        if(!Auth::logged_in())
        {
            $this->redirect('login');
        }
        $errors = array();

        if(count($_POST) > 0)
        {
            $patron = new Patron();
            if($patron->validate($_POST))
            {

                $_POST['date'] = date("Y-m-d H:i:s") ;

                $patron->insert($_POST);
                $this->redirect('patrons');
            }
            else
            {
                $errors =$patron->errors;
            }
        }

        $crumbs[] = ['Dashboard',''];
        $crumbs[] = ['Patrons','patrons'];
        $crumbs[] = ['Add','patrons/add'];
        //$data = $school ->findAll();
        $this->view('patrons.add',[
            'errors'=>$errors,
            'crumbs'=>$crumbs,
            //'rows'=>$data,
        ]);
    }

    public function edit($id=null)
    {
        if(!Auth::logged_in())
        {
            $this->redirect('login');
        }
        $patron = new Patron();
        $errors = array();
        if(count($_POST) > 0)
        {
            if($patron->validate($_POST))
            {
                //$_POST['date'] = date("Y-m-d H:i:s") ;
                $patron->update($id,$_POST);
                $this->redirect('patrons');
            }
            else
            {
                $errors =$patron->errors;
            }
        }
        $row = $patron -> where('id',$id);

        $crumbs[] = ['Dashboard',''];
        $crumbs[] = ['Patrons','patrons'];
        $crumbs[] = ['Edit','patrons/edit'];

        //$data = $school ->findAll();
        $this->view('patrons.edit',[
            'errors'=>$errors,
            'row'=>$row,
            'crumbs'=>$crumbs,
        ]);
    }

    public function delete($id=null)
    {
        if(!Auth::logged_in())
        {
            $this->redirect('login');
        }
        $patron = new Patron();
        $errors = array();
        if(count($_POST) > 0)
        {
            $patron->delete($id);
            $this->redirect('patrons');
        }
        $row = $patron -> where('id',$id);

        $crumbs[] = ['Dashboard',''];
        $crumbs[] = ['Patrons','patrons'];
        $crumbs[] = ['Delete'];

        $this->view('patrons.delete',[
            'errors'=>$errors,
            'row'=>$row,
            'crumbs'=>$crumbs,
        ]);
    }
    public function show($id)
    {
        if(!Auth::logged_in())
        {
            $this->redirect('login');
        }
        $patron = new Patron();

        $data = $patron->where('id',$id);


        $crumbs[] = ['Dashboard',''];
        $crumbs[] = ['Patrons','patrons'];
        $crumbs[] = ['Show','patrons/show'];


        $this->view('patrons.show',[
            'crumbs'=>$crumbs,
            'rows'=>$data,
        ]);
    }




}




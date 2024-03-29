<?php

/**
 * Schools
 */
Class Schools extends Controller
{
    public function index()
    {
        if(!Auth::logged_in())
        {
            $this->redirect('login');
        }
        $school = new School();
        $data = $school ->findAll();

        $crumbs[] = ['Dashboard',''];
        $crumbs[] = ['Schools','schools'];


        $this->view('schools',[
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
            $school = new School();
            if($school->validate($_POST))
            {

                $_POST['date'] = date("Y-m-d H:i:s") ;

                $school->insert($_POST);
                $this->redirect('schools');
            }
            else
            {
                $errors =$school->errors;
            }
        }

        $crumbs[] = ['Dashboard',''];
        $crumbs[] = ['Schools','schools'];
        $crumbs[] = ['Add','schools/add'];
        //$data = $school ->findAll();
        $this->view('schools.add',[
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
        $school = new School();
        $errors = array();
        if(count($_POST) > 0)
        {
            if($school->validate($_POST))
            {
                //$_POST['date'] = date("Y-m-d H:i:s") ;
                $school->update($id,$_POST);
                $this->redirect('schools');
            }
            else
            {
                $errors =$school->errors;
            }
        }
        $row = $school -> where('id',$id);

        $crumbs[] = ['Dashboard',''];
        $crumbs[] = ['Schools','schools'];
        $crumbs[] = ['Edit','schools/edit'];

        //$data = $school ->findAll();
        $this->view('schools.edit',[
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
        $school = new School();
        $errors = array();
        if(count($_POST) > 0)
        {
            $school->delete($id);
            $this->redirect('schools');
        }
        $row = $school -> where('id',$id);

        $crumbs[] = ['Dashboard',''];
        $crumbs[] = ['Schools','schools'];
        $crumbs[] = ['Delete'];

        $this->view('schools.delete',[
            'errors'=>$errors,
            'row'=>$row,
            'crumbs'=>$crumbs,
        ]);
    }


}



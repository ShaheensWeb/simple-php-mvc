<?php

class Controller_Guestbook extends Controller
{
	function __construct()
	{
		$this->allowed_actions[] = 'default_action';

                $this->model_guestbook = get_model('Model_Guestbook');
	}

	function default_action()
	{
            if ($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $this->model_guestbook->post_comment($_POST['author'], $_POST['comment']);
                $this->redirect_to_self(); // Notice that we redirect, so reloading the page won't resubmit data
            }
            else
            {
                $this->view_array['comments'] = $this->model_guestbook->get_comments();
            }
	}
}

?>
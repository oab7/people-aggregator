<?php

 require_once dirname(__FILE__).'/../../config.inc';
  
      $parent_uid = (!empty($_REQUEST['parent_uid'])) ? $_REQUEST['parent_uid'] : null;
      $user_email = null;
      $success = false;
      $user = new User();
      $msg="";
      if($parent_uid > 0) {
        try {
          $user->load((int) $parent_uid);
          $user_email = $user->email;
          $success = true;
        } catch (Exception $e) {
          $msg = $e->getMessage();
        }
      } else {
        $success = false;           
      }
?>
<?php if($success) : ?><?= htmlspecialchars($user_email) ?><?php else : ?><?= __("Not found") . " : " . $msg?><?php endif; ?>
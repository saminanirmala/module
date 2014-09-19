<h2><?php echo isset($heading) ? $heading : ''; ?></h2>
<form action="<?php echo isset($form_action) ? $form_action : ''; ?>" method="post">
<dt><label for="blog_user_name">Username</label></dt>
<dd>
<input type="text" id="blog_user_name" name="blog_user_name" value="<?php echo isset($blog_user_name) ? $blog_username : ''; ?>" maxlength="20" />
</dd>

<dt><label for="blog_password">Password</label></dt>
<dd>
<input type="password" id="blog_user_password" name="blog_user_password" value="" maxlength="20" />
</dd>

<dt><label for="blog_password2">Confirm Password</label></dt>
<dd>
<input type="password" id="blog_user_password2" name="blog_user_password2" value="" maxlength="20" />
</dd>

<dt><label for="blog_user_email">Email Address</label></dt>
<dd>
<input type="text" id="blog_user_email" name="blog_user_email" value="<?php echo isset($blog_user_email) ? $blog_user_email : ''; ?>" maxlength="254" />
</dd>

<input type="hidden" name="form_token" value="<?php echo isset($form_token) ? $form_token : ''; ?>" />
<dd>
<input type="submit" value="<?php echo isset($submit_value) ? $submit_value : 'Submit'; ?>" />
</dd>
</dl>
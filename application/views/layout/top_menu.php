<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
<<<<<<< HEAD
	  
=======
<<<<<<< HEAD
	  
=======
	  <?=anchor(base_url(), 'PET SHOP', ['class'=>'navbar-brand'])?>
>>>>>>> 3a79c8d69a33dfb5048a124d5b92b6f8ae7bf9fd
>>>>>>> 454156909725ced9d6d5b291a7dd642f7fffe0c6
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      	  
      <ul class="nav navbar-nav navbar-right">
		<li><?php echo anchor(base_url(), 'Home');?></li>
<<<<<<< HEAD
    <li>
=======
<<<<<<< HEAD
    <li>
=======
       <!--  <li>
>>>>>>> 3a79c8d69a33dfb5048a124d5b92b6f8ae7bf9fd
>>>>>>> 454156909725ced9d6d5b291a7dd642f7fffe0c6
			<?php
				$text_cart_url  = '<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>';
				$text_cart_url .= ' Inside Cart: '. $this->cart->total_items() .' items';
			?>
			<?=anchor('welcome/cart', $text_cart_url)?>
		</li>
		<?php if($this->session->userdata('username')) { ?>
			<li><div style="line-height:50px;">You Are : <?=$this->session->userdata('username')?></div></li>
			<li><?php echo anchor('logout', 'Logout');?></li>
		<?php } else { ?>
			<li><?php echo anchor('login', 'Login');?></li>
		<?php } ?>
      </ul>
	  
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
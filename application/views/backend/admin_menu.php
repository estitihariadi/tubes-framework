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
      	  
	<?php if($this->session->userdata('username')) : ?>
      <ul class="nav navbar-nav navbar-left">
        <li><?=anchor('admin/products','Products')?></li>
<<<<<<< HEAD
        <li><?=anchor('admin/invoices','Invoices')?></li>
=======
<<<<<<< HEAD
        <li><?=anchor('admin/invoices','Invoices')?></li>
=======
>>>>>>> 3a79c8d69a33dfb5048a124d5b92b6f8ae7bf9fd
>>>>>>> 454156909725ced9d6d5b291a7dd642f7fffe0c6
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
			<span style="line-height:50px;">
				<?php echo 'You Are: ' . $this->session->userdata('username');?>
			</span>
		</li>
		<li>
			<?php echo anchor('logout', 'Logout');?>
		</li>
      </ul>
	  <?php endif; ?>
	  
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

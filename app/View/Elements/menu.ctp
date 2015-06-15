  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Bootstrap theme</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class=""><?php echo $this->Html->link('Home', array('controller' => 'pages', 'action' => 'home')) ?></li>
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo $this->Html->link('Listar usuarios',array('controller'=>'users','action'=>'index'))?> </li>
                <li><?php echo $this->Html->link('Agregar usuario',array('controller'=>'users','action'=>'add'))?> </li>
              </ul>
            </li>


            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Meseros <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo $this->Html->link('Listar meseros',array('controller'=>'meseros','action'=>'index'))?> </li>
                <li><?php echo $this->Html->link('Agregar mesero',array('controller'=>'meseros','action'=>'add'))?> </li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mesas <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo $this->Html->link('Listar mesas',array('controller'=>'mesas','action'=>'index'))?> </li>
                <li><?php echo $this->Html->link('Agregar mesa',array('controller'=>'mesas','action'=>'add'))?> </li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cocineros <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo $this->Html->link('Listar cocineros',array('controller'=>'cocineros','action'=>'index'))?> </li>
                <li><?php echo $this->Html->link('Agregar cocineros',array('controller'=>'cocineros','action'=>'add'))?> </li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Platillos <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo $this->Html->link('Listar platillos',array('controller'=>'platillos','action'=>'index'))?> </li>
                <li><?php echo $this->Html->link('Agregar platillos',array('controller'=>'platillos','action'=>'add'))?> </li>
              <li class="divider"></li>
              <li><?php echo $this->Html->link('Listar categorias',array('controller'=>'categoria_platillos','action'=>'index'))?> </li>
                <li><?php echo $this->Html->link('Agregar categorias',array('controller'=>'categoria_platillos','action'=>'add'))?> </li>
              </ul>
            </li>

            
           
          </ul>
          <?php echo $this->Html->link('Pedidos',array('controller'=>'pedidos','accion'=>'view'),array('class'=>'btn btn-success navbar-btn ')); ?>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    
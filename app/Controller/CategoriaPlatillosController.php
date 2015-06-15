<?php
App::uses('AppController', 'Controller');
/**
 * CategoriaPlatillos Controller
 *
 * @property CategoriaPlatillo $CategoriaPlatillo
 * @property PaginatorComponent $Paginator
 */
class CategoriaPlatillosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Session', 'RequestHandler');
   	
	public $helpers = array('Html', 'Form', 'Time', 'Js');

    public $paginate = array(
        'limit' => 3,
        'order' => array(
            'CategoriaPlatillo.id' => 'asc'
        )
    );

/**
 * index method
 *
 * @return void
 */
	public function index() {
	$this->CategoriaPlatillo->recursive = 0;

		$this->paginate['CategoriaPlatillo']['limit'] = 3;
		//$this->paginate['Mesero']['conditions'] = array('Mesero.dni' => "34343");
		$this->paginate['CategoriaPlatillo']['order'] = array('CategoriaPlatillo.id' => 'asc');
 		//$this->Paginator->settings = $this->paginate;
		$this->set('categoriaPlatillos', $this->paginate());
		
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CategoriaPlatillo->exists($id)) {
			throw new NotFoundException(__('Invalid categoria platillo'));
		}
		$options = array('conditions' => array('CategoriaPlatillo.' . $this->CategoriaPlatillo->primaryKey => $id));
		$this->set('categoriaPlatillo', $this->CategoriaPlatillo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CategoriaPlatillo->create();
			if ($this->CategoriaPlatillo->save($this->request->data)) {
				$this->Session->setFlash(__('The categoria platillo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categoria platillo could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CategoriaPlatillo->exists($id)) {
			throw new NotFoundException(__('Invalid categoria platillo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CategoriaPlatillo->save($this->request->data)) {
				$this->Session->setFlash(__('The categoria platillo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categoria platillo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CategoriaPlatillo.' . $this->CategoriaPlatillo->primaryKey => $id));
			$this->request->data = $this->CategoriaPlatillo->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CategoriaPlatillo->id = $id;
		if (!$this->CategoriaPlatillo->exists()) {
			throw new NotFoundException(__('Invalid categoria platillo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CategoriaPlatillo->delete()) {
			$this->Session->setFlash(__('The categoria platillo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The categoria platillo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

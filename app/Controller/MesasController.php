<?php
App::uses('AppController', 'Controller');
/**
 * Mesas Controller
 *
 * @property Mesa $Mesa
 * @property PaginatorComponent $Paginator
 */
class MesasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	

/**
 * index method
 *
 * @return void
 */
public $components = array('Session', 'RequestHandler');
   	
	public $helpers = array('Html', 'Form', 'Time', 'Js');

    public $paginate = array(
        'limit' => 3,
        'order' => array(
            'Mesero.id' => 'asc'
        )
    );
	
	public function index() {

		$this->Mesa->recursive = 0;

		$this->paginate['Mesa']['limit'] = 3;
		//$this->paginate['Mesero']['conditions'] = array('Mesero.dni' => "34343");
		$this->paginate['Mesa']['order'] = array('Mesa.id' => 'asc');
 		//$this->Paginator->settings = $this->paginate;
		$this->set('mesas', $this->paginate());
}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Mesa->exists($id)) {
			throw new NotFoundException(__('Invalid mesa'));
		}
		$options = array('conditions' => array('Mesa.' . $this->Mesa->primaryKey => $id));
		$this->set('mesa', $this->Mesa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mesa->create();
			if ($this->Mesa->save($this->request->data)) {
				$this->Session->setFlash(__('The mesa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mesa could not be saved. Please, try again.'));
			}
		}
		$meseros = $this->Mesa->Mesero->find('list');
		$this->set(compact('meseros'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Mesa->exists($id)) {
			throw new NotFoundException(__('Invalid mesa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Mesa->save($this->request->data)) {
				$this->Session->setFlash(__('The mesa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mesa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mesa.' . $this->Mesa->primaryKey => $id));
			$this->request->data = $this->Mesa->find('first', $options);
		}
		$meseros = $this->Mesa->Mesero->find('list');
		$this->set(compact('meseros'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Mesa->id = $id;
		if (!$this->Mesa->exists()) {
			throw new NotFoundException(__('Invalid mesa'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Mesa->delete()) {
			$this->Session->setFlash(__('The mesa has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mesa could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

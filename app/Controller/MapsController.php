<?php
App::uses('AppController', 'Controller');
/**
 * Maps Controller
 *
 * @property Map $Map
 */
class MapsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Map->recursive = 0;
		$this->set('maps', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Map->exists($id)) {
			throw new NotFoundException(__('Invalid map'));
		}
		$options = array('conditions' => array('Map.' . $this->Map->primaryKey => $id));
		$this->set('map', $this->Map->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Map->create();
			if ($this->Map->save($this->request->data)) {
				$this->Session->setFlash(__('The map has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The map could not be saved. Please, try again.'));
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
		if (!$this->Map->exists($id)) {
			throw new NotFoundException(__('Invalid map'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Map->save($this->request->data)) {
				$this->Session->setFlash(__('The map has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The map could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Map.' . $this->Map->primaryKey => $id));
			$this->request->data = $this->Map->find('first', $options);
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
		$this->Map->id = $id;
		if (!$this->Map->exists()) {
			throw new NotFoundException(__('Invalid map'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Map->delete()) {
			$this->Session->setFlash(__('Map deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Map was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

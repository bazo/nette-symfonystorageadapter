<?php
namespace Bazo;
/**
 * SymfonySessionStorageAdapter
 *
 * @author Martin
 */
class SymfonySessionStorageAdapter implements Nette\Http\ISessionStorage
{
	
	private
		/** @var \SessionHandlerInterface */	
		$symfonyHandler
	;
	
	function __construct(\SessionHandlerInterface $symfonyHandler)
	{
		$this->symfonyHandler = $symfonyHandler;
	}

	
	function open($savePath, $sessionName)
	{
		return $this->symfonyHandler->open($savePath, $sessionName);
	}

	function close()
	{
		return $this->symfonyHandler->close();
	}

	function read($id)
	{
		return $this->symfonyHandler->read($id);
	}

	function write($id, $data)
	{
		return $this->symfonyHandler->write($id, $data);
	}

	function remove($id)
	{
		return $this->symfonyHandler->destroy($id);
	}

	function clean($maxlifetime)
	{
		return $this->symfonyHandler->gc($maxlifetime);
	}
}

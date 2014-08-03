<?php
namespace Bazo;
use Nette\Http\ISessionStorage;
/**
 * SymfonySessionStorageAdapter
 *
 * @author Martin
 */
class SymfonySessionStorageAdapter implements ISessionStorage
{

    /** @var \SessionHandlerInterface */
        private $symfonyHandler
    ;

    public function __construct(\SessionHandlerInterface $symfonyHandler)
    {
        $this->symfonyHandler = $symfonyHandler;
    }

    public function open($savePath, $sessionName)
    {
        return $this->symfonyHandler->open($savePath, $sessionName);
    }

    public function close()
    {
        return $this->symfonyHandler->close();
    }

    public function read($id)
    {
        return $this->symfonyHandler->read($id);
    }

    public function write($id, $data)
    {
        return $this->symfonyHandler->write($id, $data);
    }

    public function remove($id)
    {
        return $this->symfonyHandler->destroy($id);
    }

    public function clean($maxlifetime)
    {
        return $this->symfonyHandler->gc($maxlifetime);
    }
}

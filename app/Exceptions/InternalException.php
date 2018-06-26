<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Request;

class InternalException extends Exception
{
    protected $msgForUser;

    public function __contruct(string $message, string $msgForUser = '系统内部错误')
    {
    	parent::__contruct($message, $code);
    	$this->msgForUser = $msgForUser;
    }

    public function render(Request $request)
    {
    	if ($request->expectsJson()) {
    		return response()->json(['msg' => $this->msgForUser], $this->code);
    	}

    	return view('pages.error', ['msg' => $this->msgForUser]);
    }
}

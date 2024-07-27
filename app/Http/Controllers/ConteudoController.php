<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConteudoController extends Controller
{
    public function index()
    {
        $conversas = [
            ["Chat" => "Chat1", "chat-pic" => "chat-pic0", "chat-name" => "Bloqueado", "chat-lastmsg" => "Libere o conteúdo para visualizar", "chat-lastmsg-time" => "2:26", "chat-quant" => 5, "visualizada" => "N"],
            ["Chat" => "Chat2", "chat-pic" => "chat-pic1", "chat-name" => "Bloqueado", "chat-lastmsg" => "Libere o conteúdo para visualizar", "chat-lastmsg-time" => "4:07", "chat-quant" => 3, "visualizada" => "S"],
            ["Chat" => "Chat3", "chat-pic" => "chat-pic2", "chat-name" => "Bloqueado", "chat-lastmsg" => "Libere o conteúdo para visualizar", "chat-lastmsg-time" => "15:36", "chat-quant" => 6, "visualizada" => "S"],
            ["Chat" => "Chat4", "chat-pic" => "chat-pic3", "chat-name" => "Bloqueado", "chat-lastmsg" => "Libere o conteúdo para visualizar", "chat-lastmsg-time" => "3:34", "chat-quant" => 4, "visualizada" => "N"],
            ["Chat" => "Chat5", "chat-pic" => "chat-pic4", "chat-name" => "Bloqueado", "chat-lastmsg" => "Libere o conteúdo para visualizar", "chat-lastmsg-time" => "12:02", "chat-quant" => 6, "visualizada" => "S"],
            ["Chat" => "Chat6", "chat-pic" => "chat-pic5", "chat-name" => "Bloqueado", "chat-lastmsg" => "Libere o conteúdo para visualizar", "chat-lastmsg-time" => "13:24", "chat-quant" => 2, "visualizada" => "S"],
            ["Chat" => "Chat7", "chat-pic" => "chat-pic6", "chat-name" => "Bloqueado", "chat-lastmsg" => "Libere o conteúdo para visualizar", "chat-lastmsg-time" => "5:20", "chat-quant" => 6, "visualizada" => "S"],
            ["Chat" => "Chat8", "chat-pic" => "chat-pic7", "chat-name" => "Bloqueado", "chat-lastmsg" => "Libere o conteúdo para visualizar", "chat-lastmsg-time" => "1:30", "chat-quant" => 4, "visualizada" => "S"],
            ["Chat" => "Chat9", "chat-pic" => "chat-pic8", "chat-name" => "Bloqueado", "chat-lastmsg" => "Libere o conteúdo para visualizar", "chat-lastmsg-time" => "3:14", "chat-quant" => 1, "visualizada" => "N"],
            ["Chat" => "Chat10", "chat-pic" => "chat-pic9", "chat-name" => "Bloqueado", "chat-lastmsg" => "Libere o conteúdo para visualizar", "chat-lastmsg-time" => "5:04", "chat-quant" => 4, "visualizada" => "S"]
        ];

        return view('conteudo.index', compact('conversas'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function home()
    {
        return view('events.home');
    }
    public function index(Request $request)
    {
        $query = Event::query();

        // Aplicando filtros
        if ($request->filled('nome')) {
            $query->where('nome', 'like', '%' . $request->nome . '%');
        }
        if ($request->filled('tipo')) {
            $query->where('tipo', $request->tipo);
        }
        if ($request->filled('data_de')) {
            $query->whereDate('data_hora', '>=', $request->data_de);
        }
        if ($request->filled('data_ate')) {
            $query->whereDate('data_hora', '<=', $request->data_ate);
        }

        $events = $query->orderBy('data_hora', 'asc')->paginate(10);

        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(EventRequest $request)
    {
        $data = $request->validated();
        $data['descricao'] = $request->descricao ?? null;
        $data['link_endereco'] = $request->link_endereco ?? null;
    
        Event::create($data);
        return redirect()->route('events.index')->with('success', 'Evento cadastrado com sucesso!');
    }
    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }


    public function update(EventRequest $request, Event $event)
    {
        $data = $request->validated();
        $data['descricao'] = $request->descricao ?? null;
        $data['link_endereco'] = $request->link_endereco ?? null;
    
        $event->update($data);
        return redirect()->route('events.index')->with('success', 'Evento atualizado com sucesso!');
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index')->with('success', 'Evento excluído com sucesso!');
    }
}

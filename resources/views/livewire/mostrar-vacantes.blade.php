<div>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        @forelse ($vacantes as $vacante)
            <div class="p-6 bg-white dark:bg-gray-800 border-b dark:border-slate-600  text-gray-900 dark:text-gray-200 md:flex md:justify-between md:items-center">
                <div class="space-y-3">
                    <a href="#" class="text-xl font-bold">
                        {{$vacante->titulo}}
                    </a>
                    <p class="text-sm text-gray-600 dark:text-gray-100 font-bold">{{$vacante->empresa}}</p>
                    <p class="text-sm text-gray-500 dark:text-gray-100 font-bold">Último día: {{ \Carbon\Carbon::parse($vacante->ultimo_dia)->format('d/m/Y') }}</p>
                </div>
                <div class="flex flex-col md:flex-row items-stretch gap-3  mt-5 md:mt-0">
                    <a href="#" class="bg-slate-800 dark:bg-slate-200 py-2 px-4 rounded-lg text-white dark:text-gray-800  text-xs font-bold uppercase text-center">Candidatos</a>
                    <a href="{{route('vacantes.edit', $vacante->id)}}" class="bg-slate-800 dark:bg-slate-200 py-2 px-4 rounded-lg text-white dark:text-gray-800  text-xs font-bold uppercase text-center">Editar</a>
                    <a href="#" class="bg-red-800 dark:bg-red-400 py-2 px-4 rounded-lg text-white dark:text-gray-800  text-xs font-bold uppercase text-center">Eliminar</a>
                </div>
            </div>       
        @empty
            <p class="p-3 text-center text-sm text-gray-600 dark:text-gray-300">No hay vacantes aun</p>
        @endforelse
    </div>
    
    <div class=" mt-10">
        {{$vacantes->links()}}
    </div>
</div>

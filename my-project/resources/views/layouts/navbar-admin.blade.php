@php
  $items = [
    [
      "nombre" => "Estudios",
      "lista" => [
        [
          "nombre" => "Gestión de convocatorias"
        ],
        [
          "nombre" => "Gestión de grupos"
        ],
        [
          "nombre" => "Gestión de proyectos de grupos"
        ],
        [
          "nombre" => "Gestión de proyectos FEX"
        ],
        [
          "nombre" => "Gestión de proyectos"
        ],
        [
          "nombre" => "Informes técnicos"
        ],
        [
          "nombre" => "Monitoreo"
        ],
        [
          "nombre" => "Deuda de proyectos"
        ],
      ]
    ],
    [
      "nombre" => "Economía",
      "lista" => [
        [
          "nombre" => "Gestión de convocatorias"
        ],
      ]
    ],
    [
      "nombre" => "Reportes",
      "lista" => [
        [
          "nombre" => "Gestión de convocatorias"
        ],
      ]
    ],
    [
      "nombre" => "Constancias",
      "lista" => [
        [
          "nombre" => "Gestión de convocatorias"
        ],
      ]
    ],
    [
      "nombre" => "Facultad",
      "lista" => [
        [
          "nombre" => "Gestión de convocatorias"
        ],
      ]
    ],
    [
      "nombre" => "Admin",
      "lista" => [
        [
          "nombre" => "Gestión de convocatorias"
        ],
      ]
    ],
  ]
@endphp

<nav class="bg-blue-950">
  <div class="w-full mx-auto px-4">
    <div class="flex flex-wrap items-center justify-between max-md:py-3">
      <a href="#" class="text-white text-lg font-bold">RAIS</a>
      <button class="md:hidden inline-flex items-center justify-center border h-8 w-8 rounded-md">
        <i class="fa-solid fa-bars text-white"></i>
      </button>
      <div class="md:inline-flex md:w-auto w-full py-2 ">
        <ul id="menu" class="md:flex-row md:space-x-2 flex flex-col">
          @foreach ($items as $item)
            <li class="relative">
              <button href="" class="flex p-2 text-white">{{ $item['nombre'] }}</button>
              <div class="sublist right-0 p-2 bg-white rounded-md shadow md:absolute">
                @if(isset($item['lista']) && count($item['lista']) > 0)
                  <ul class="space-y-2 md:w-48">
                    @foreach ($item['lista'] as $subitem)
                      <li>
                        <a href="" class="flex p-1 text-xs font-medium text-black rounded-md">
                          {{ $subitem['nombre'] }}
                        </a>
                      </li>
                    @endforeach
                  </ul>
                @endif
              </div>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</nav>
<div wire:poll.15s.visible>
    @forelse($this->properties as $property)
        <div class="bg-white dark:bg-slate-800 shadow-md rounded border border-slate-200 dark:border-slate-700 ctk06 mb-3">
            <div class="flex flex-start cwh9k">
                <div class="ckut6">
                    <h2 class="text-slate-800 dark:text-slate-100 cqosy c7j98 flex gap-1">
                        <div>
                            {{ $property->title }}:
                        </div>
                        <div>
                            @if(!empty($property->value))
                                {{ $property->value }}
                            @else
                                <div class="text-gray-200">
                                    Значение пустое
                                </div>
                            @endif
                        </div>
                    </h2>

                    <footer class="flex flex-wrap text-sm">
                        <div class="flex items-center after:content-['·'] cmgbf caixf c1gzw c5vsi cyjqm cojll cz3bc">
                            <span class="text-slate-500">
                                {{ $property->updated_at->diffForHumans() }}
                            </span>
                        </div>
                        <div class="flex items-center after:content-['·'] cmgbf caixf c1gzw c5vsi cyjqm cojll cz3bc">
                            <span class="text-slate-500">
                                В истории: 213
                            </span>
                        </div>
                    </footer>
                </div>


                <div class="c7n6y" x-data="{'delete_confirm': false}" x-on:click.stop.outside="delete_confirm = false">
                    <button @click="if(delete_confirm == false) { delete_confirm = true } else { $wire.deleteProp({{$property->id}}); delete_confirm = false }" class="flex justify-center items-center c46uo cm7vt cqosy cob4g chmlm c0qeg cck8h cp92t">
                        <svg id='Delete_24' width='24' height='24' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'><rect width='24' height='24' stroke='none' fill='#000000' opacity='0'/>
                            <g transform="matrix(0.04 0 0 0.04 12 12)" >
                                <g style="" >
                                    <g transform="matrix(1 0 0 1 0 0)" >
                                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(224,79,95); fill-rule: nonzero; opacity: 1;" transform=" translate(-256, -256)" d="M 504.1 256 C 504.1 119 393 7.9 256 7.9 C 119 7.9 7.9 119 7.9 256 C 7.9 393 119 504.1 256 504.1 C 393 504.1 504.1 393 504.1 256 z" stroke-linecap="round" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 0 -0.01)" >
                                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" translate(-256, -255.99)" d="M 285 256 L 357.5 171.8 C 365.4 162.60000000000002 364.4 148.8 355.2 140.8 C 346 132.9 332.2 133.9 324.3 143.10000000000002 L 256 222.4 L 187.8 143.2 C 179.9 134 166 133 156.8 140.89999999999998 C 147.60000000000002 148.79999999999998 146.60000000000002 162.7 154.5 171.89999999999998 L 227 256 L 154.5 340.2 C 146.6 349.4 147.6 363.2 156.8 371.2 C 160.9 374.8 166 376.5 171.10000000000002 376.5 C 177.3 376.5 183.40000000000003 373.9 187.70000000000002 368.9 L 255.90000000000003 289.7 L 324.1 368.9 C 328.40000000000003 373.9 334.6 376.5 340.70000000000005 376.5 C 345.80000000000007 376.5 350.90000000000003 374.8 355.00000000000006 371.2 C 364.20000000000005 363.3 365.20000000000005 349.4 357.30000000000007 340.2 L 285 256 z" stroke-linecap="round" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <div class="text-xs" x-show="delete_confirm">
                            Точно?
                        </div>
                    </button>
                </div>
            </div>
        </div>
    @empty

    @endforelse
</div>

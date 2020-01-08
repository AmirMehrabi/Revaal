@extends('layouts.dashboard-dark')


@section('content')

{{-- <header class="flex items-center mb-4 py-4">
    <div class="flex justify-between items-center w-full ">
        <p class="text-gray-600 text-sm">
            <a href="/projects">پروژه‌های من</a>
        </p>        
        
        <a href="/projects/create" class="button" @click.prevent="$modal.show('new-project')">پروژه‌ی جدید</a>
    </div>

</header> --}}

<main class="container">

    
    <div class=" bg-gray-bg rounded-lg shadow-lg">
        
    <div class="flex flex-row items-center">
        <div class="text-gray-700 flex-grow px-4 py-2 mr-2">
            <h1 class="text-4xl text-gray-light font-extrabold tracking-wider">{{ Carbon\Carbon::now()->format('l jS\\, F')}}</h1>
            {{-- <p class="text-gray-600">۵ ساعت و ۳۰ دقیقه تا زمان خواب</p> --}}
        </div>
        <div class="text-gray-light px-4 py-2 ml-2 text-left">
            <div class="flex flex-col text-left items-start">
                <div class="bg-green-main text-gray-light shadow-xl text-center flex items-center px-4 m-2 h-16 w-16">
                    <a href="/projects/create" class="button w-full h-full flex items-center justify-center" @click.prevent="$modal.show('new-project')"><i class="fas fa-plus fa-2x   "></i></a></div>  
</div>


        </div>
    </div>
    @if ($daily_percent > 0)
    <div class="px-2 my-8">
        <div class=" w-full bg-gray-bg ">
            <div class="text-xl bg-gray-light font-extrabold py-5 text-xs  leading-none text-center text-gray-bg text-4xl shadow-2xl flex justify-end h-24 flex items-center"
                style="width: {{ $daily_percent }}%">{{ $daily_percent }}% &nbsp;</div>
        </div>
        
    </div>
    

    @endif



<div class=" bg-gray-dark rounded-lg p-3 my-8" style="">
    
<div class="flex flex-wrap align-items-center justify-center">
    @forelse ($projects as $project)
    @if ($project->completed == 0)
    {{-- Habit Card --}}
    <div class="habit-card habit-box w-30 mh-30 flex-none p-2 items-center content-between">
        <div class="min-h-full flex flex-wrap content-around bg-gray-dark rounded-2xl mh-20 text-gray-light text-center p-2  border-3 border-{{ $project->color ?? 'blue'}}-500">
            <div class="flex flex-row w-full content-center justify-center items-center my-2">
                <div class="text-center t5ext-sm"> {{ $project->title}} </div>
    
            </div>
            <form action="{{$project->path()}}" method="post" class="w-full ">
                        
                @method('PATCH')
                @csrf
                <div class="w-full">
                    <label class="flex justify-center items-center">
                        <div class="bg-white  rounded  w-10 h-10 flex flex-shrink-0 justify-center items-center  rounded-full shadow-md hover:shadow-xl">
                          <input type="checkbox" class="opacity-0 absolute" onchange="this.form.submit()" name="completed" {{$project->completed ? 'checked' : ''}}>
                          <svg  class="fill-current w-5 h-5 text-red-500 pointer-events-none" viewBox="0 0 47.971 47.971" style="enable-background:new 0 0 47.971 47.971;" xml:space="preserve">
                     <g>
                         <path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88
                             c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242
                             C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879
                             s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"/>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     </svg>
                     
                          <svg class="fill-current hidden w-5 h-5 text-green-main pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                        </div>
                      </label>
                </div>


            
            </form>
            {{-- <div class="flex flex-row w-full content-center justify-center items-center mt-2">
                <div class="text-center "> <a href="#"><i class="fas fa-check bg-white text-gray-900 p-1 rounded-full"></i></a> </div>
            </div> --}}
        </div>
      </div>
      {{-- End of habit card --}}      
      
      @elseif($project->completed == 1)
      <div class="habit-card habit-box w-full sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/12 flex-none p-2 items-center content-between">
        <div class=" min-h-full flex flex-wrap content-around bg-{{ $project->color ?? 'blue'}}-500 rounded-2xl mh-20 text-gray-light text-center p-2  border-3 border-{{ $project->color ?? 'blue'}}-500">
            <div class="flex flex-row w-full content-center justify-center items-center my-2">
                <div class="text-center t5ext-sm"> {{ $project->title }} </div>
    
            </div>
            <form action="{{$project->path()}}" method="post" class="w-full">
                        
                @method('PATCH')
                @csrf

                <div class="w-full">
                    <label class="flex justify-center items-center">

                        <div class="bg-white  rounded  w-10 h-10 flex flex-shrink-0 justify-center items-center  rounded-full shadow-md hover:shadow-xl">
                          <input type="checkbox" class="opacity-0 absolute" onchange="this.form.submit()" name="completed" {{$project->completed ? 'checked' : ''}}>
                          <svg class="fill-current hidden w-4 h-4 text-green-main pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                        </div>
                      </label>
                </div>
            
            </form>

        </div>
      </div>
    @endif

    @empty
        <div class="text-gray-400 text-xl my-4 py-20 text-3xl tracking-widers">You don't have any habits yet.</div>
    @endforelse












    {{-- Habit Card --}}
  {{-- <div class="habit-card habit-box w-full sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/12 flex-none p-2 items-center content-between">
    <div class=" min-h-full flex flex-wrap content-around bg-green-500 rounded-2xl mh-20 text-gray-light text-center p-2  border-3 border-green-500">
        <div class="flex flex-row w-full content-center justify-center items-center my-2">
            <div class="text-center t5ext-sm"> Drink Water </div>

        </div>
        <div class="flex flex-row w-full content-center justify-center items-center mt-2">
            <div class="text-center "> <a href=""><i class="fas fa-check bg-white text-gray-900 p-1 rounded-full"></i></a> </div>
        </div>
    </div>
  </div> --}}

  {{-- End of habit card --}}




</div>
    {{-- <div class="text-gray-700 text-center mt-2">
                <div class="shadow w-full  rounded-full">
                    <div class="bg-gray-600 text-xs rounded-full leading-none text-center text-gray-light"
                        style="width: 60%">&nbsp;</div>
                </div>
  </div> --}}

</div>

    </div>
{{-- Day view ends here --}}

</main>


<section class="container rounded-lg mt-5">

<div class="flex-center position-ref py-5">

    <div class="content w-full">

        <div class="w-full py-3 pb-6">
            <div class="">
                <table class="table w-full flex justify-between">
                    <thead id="calendar-body">
                        {{-- <h1 class="table-heading-top flex inline-flex px-2 mb-1">نوشیدن ۳ لیوان آب</h1> --}}
                        {{-- <h3 class="card-header" id="monthAndYear"></h3> --}}
            <div class="">


                <div class="flex flex-row justify-between w-full">
                    <div class="text-gray-400  text-4xl font-bold"> {{ Carbon\Carbon::now()->addMonthsNoOverflow(-2)->format(' F')}} </div>
                    <div class="text-gray-400  text-4xl font-bold"> {{ Carbon\Carbon::now()->addMonthsNoOverflow(-1)->format(' F')}} </div>
                    <div class="text-gray-light font-extrabold text-4xl"> {{ Carbon\Carbon::now()->format(' F')}} </div>

                </div>
<div class="flex flex-row my-12">
    <div class="w-1/2">&nbsp;</div>
    @if ( $daily_percent > 0)
    <div class=" flex  w-1/2 text-gray-light text-center h-32  items-center border-l border-white">
        <div class=" w-full  rounded-full">
            <div class="bg-green-main text-xs leading-none text-center text-gray-light h-20 flex items-center shadow h-24 flex items-center"
                style="width: {{ $daily_percent }}%"><p class="mx-auto text-xl"><span class=" text-3xl font-extrabold">{{ $daily_percent }}%</span> Progress</p></div>
        </div>
</div>        
    @endif

</div>
            </div>
                    </thead>
                    <tr class="">
                        <th class="text-right text-gray-light font-normal "></th>
                        <td class="h-10 w-10 text-center text-gray-400 font-bold">1</td>
                        <td class="h-10 w-10 text-center text-gray-400 font-bold">2</td>
                        <td class="h-10 w-10 text-center text-gray-400 font-bold">3</td>
                        <td class="h-10 w-10 text-center text-gray-400 font-bold">4</td>
                        <td class="h-10 w-10 text-center text-gray-400 font-bold">5</td>
                        <td class="h-10 w-10 text-center text-gray-400 font-bold">6</td>
                        <td class="h-10 w-10 text-center text-gray-400 font-bold">7</td>
                        <td class="h-10 w-10 text-center text-gray-400 font-bold">8</td>
                        <td class="h-10 w-10 text-center text-gray-400 font-bold">9</td>
                        <td class="h-10 w-10 text-center text-gray-400 font-bold">10</td>
                        <td class="h-10 w-10 text-center text-gray-400 font-bold">11</td>
                        <td class="h-10 w-10 text-center text-gray-400 font-bold">12</td>
                        <td class="h-10 w-10 text-center text-gray-400 font-bold">13</td>
                        <td class="h-10 w-10 text-center text-gray-400 font-bold">14</td>
                        <td class="h-10 w-10 text-center text-gray-400 font-bold">15</td>
                        <td class="h-10 w-10 text-center text-gray-400 font-bold">16</td>
                        <td class="h-10 w-10 text-center text-gray-400 font-bold">17</td>
                        <td class="h-10 w-10 text-center text-gray-400 font-bold">18</td>
                        <td class="h-10 w-10 text-center text-gray-400 font-bold">19</td>
                        <td class="h-10 w-10 text-center text-gray-400 font-bold">20</td>
                        <td class="h-10 w-10 text-center text-gray-400 font-bold">21</td>
                        <td class="h-10 w-10 text-center text-gray-400 font-bold">22</td>
                        <td class="h-10 w-10 text-center text-gray-400 font-bold">23</td>
                        <td class="h-10 w-10 text-center text-gray-400 font-bold">24</td>
                        <td class="h-10 w-10 text-center text-gray-400 font-bold">25</td>
                        <td class="h-10 w-10 text-center text-gray-400 font-bold">26</td>
                        <td class="h-10 w-10 text-center text-gray-400 font-bold">27</td>
                        <td class="h-10 w-10 text-center text-gray-400 font-bold">28</td>
                        <td class="h-10 w-10 text-center text-gray-400 font-bold">29</td>
                        <td class="h-10 w-10 text-center text-gray-400 font-bold">30</td>
                        <td class="h-10 w-10 text-center text-gray-400 font-bold">31</td>



                    </tr>
                    @foreach ($projects as $project)

                    <tr class="">
                        <th class="text-right text-gray-light font-normal pr-4">{{ $project->title}}   </th>
                        <td class="h-10 w-10 bg-gray-dark"></td>
                        <td class="h-10 w-10 bg-{{$project->color}}-500"></td>
                        <td class="h-10 w-10 bg-gray-dark"></td>
                        <td class="h-10 w-10 bg-gray-dark"></td>
                        <td class="h-10 w-10 bg-gray-dark"></td>
                        <td class="h-10 w-10 bg-{{$project->color}}-500"></td>
                        <td class="h-10 w-10 bg-gray-dark"></td>
                        <td class="h-10 w-10 bg-gray-dark"></td>
                        <td class="h-10 w-10 bg-{{$project->color}}-500"></td>
                        <td class="h-10 w-10 bg-gray-dark"></td>
                        <td class="h-10 w-10 bg-gray-dark"></td>
                        <td class="h-10 w-10 bg-{{$project->color}}-500"></td>
                        <td class="h-10 w-10 bg-gray-dark"></td>
                        <td class="h-10 w-10 bg-gray-dark"></td>
                        <td class="h-10 w-10 bg-gray-dark"></td>
                        <td class="h-10 w-10 bg-{{$project->color}}-500"></td>
                        <td class="h-10 w-10 bg-gray-dark"></td>
                        <td class="h-10 w-10 bg-gray-dark"></td>
                        <td class="h-10 w-10 bg-gray-dark"></td>
                        <td class="h-10 w-10 bg-gray-dark"></td>
                        <td class="h-10 w-10 bg-gray-dark"></td>
                        <td class="h-10 w-10 bg-gray-dark"></td>
                        <td class="h-10 w-10 bg-gray-dark"></td>
                        <td class="h-10 w-10 bg-{{$project->color}}-500"></td>
                        <td class="h-10 w-10 bg-gray-dark"></td>
                        <td class="h-10 w-10 bg-gray-dark"></td>
                        <td class="h-10 w-10 bg-{{$project->color}}-500"></td>
                        <td class="h-10 w-10 bg-{{$project->color}}-500"></td>
                        <td class="h-10 w-10 bg-{{$project->color}}-500"></td>
                        <td class="h-10 w-10 bg-gray-dark"></td>
                        <td class="h-10 w-10 bg-gray-dark"></td>



                    </tr>
                    @endforeach



                </table>
            </div>
        </div>

    </div>
</div>

</section>





@endsection




@section('footer-assets')
<script>
    today = new Date();
    currentMonth = today.getMonth() - 1;
    currentYear = today.getFullYear();
    selectYear = today.getFullYear();
    selectMonth = today.getMonth();

    months = ["ژانویه", "Feb", "Mar", "Apr", "May", "Jun", "جولای", "آبان", "سپتامبر", "اکتبر", "نوامبر", "Dec"];

    monthAndYear = document.getElementById("monthAndYear");
    showCalendar(currentMonth, currentYear);


    function showCalendar(month, year) {

        let firstDay = (new Date(year, month)).getDay();

        tbl = document.getElementById("calendar-body"); // body of the calendar

        // clearing all previous cells
        tbl.innerHTML = "";
        tbl.classList.add("mb-5");

        // filing data about month and in the page via DOM.
        monthAndYear.innerHTML = months[month] + " " + year;
        selectYear.value = year;
        selectMonth.value = month;

        // creating all cells
        let date = 1;
        for (let i = 0; i < 6; i++) {
            // creates a table row
            let row = document.createElement("tr");
            console.log(month);
            //creating individual cells, filing them up with data.
            for (let j = 0; j < 32; j++) {
                if (i === 0 && j < 1) {
                    cell = document.createElement("td");
                    cellText = document.createTextNode("");
                    cell.appendChild(cellText);
                    row.appendChild(cell);
                } else if (date > daysInMonth(month, year)) {
                    break;
                } else {
                    cell = document.createElement("th");
                    cell.classList.add("font-light");
                    cellText = document.createTextNode(date);;
                    if (date === today.getDate() && year === today.getFullYear() && month === today.getMonth()) {
                        cell.classList.add("current-day");
                    } // color today's date
                    cell.appendChild(cellText);
                    row.appendChild(cell);
                    date++;
                }


            }

            tbl.appendChild(row); // appending each row into calendar body.
        }

    }


    // check how many days in a month code from https://dzone.com/articles/determining-number-days-month
    function daysInMonth(iMonth, iYear) {
        return 32 - new Date(iYear, iMonth, 32).getDate();
    }

    function toPersianNum($number) {
        $number = str_replace("1", "۱", $number);
        $number = str_replace("2", "۲", $number);
        $number = str_replace("3", "۳", $number);
        $number = str_replace("4", "۴", $number);
        $number = str_replace("5", "۵", $number);
        $number = str_replace("6", "۶", $number);
        $number = str_replace("7", "۷", $number);
        $number = str_replace("8", "۸", $number);
        $number = str_replace("9", "۹", $number);
        $number = str_replace("0", "۰", $number);
        return $number;
    }

</script>

@endsection



@section('footer-assets')
    <script>
    $(document).ready(function () {
        $(function() {
   $(".auto_submit_item").change(function() {
     $("form").submit();
   });
 });
    });
    </script>
@endsection
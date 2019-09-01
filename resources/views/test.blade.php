@extends('layouts.app')

@section('header-assets')
    
@endsection


@section('content')
        <div class="flex-center position-ref full-height">

            <div class="content w-full">
                <div class="title m-b-md">
                    روال
                </div>
                <div class="w-full px-3 pb-6">
                    <div class="">
                        <table class="table w-full flex justify-between">
                                                        <thead id="calendar-body">
                                {{-- <h1 class="table-heading-top flex inline-flex px-2 mb-1">نوشیدن ۳ لیوان آب</h1> --}}
                                <h3 class="card-header" id="monthAndYear"></h3>

                            </thead>
  <tr>
    <th class="border-l-4 border-black">کار اول:</th>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>



  </tr>
  <tr>
    <th class="border-l-4 border-black">کار دوم:</th>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>


  </tr>
  <tr>
    <th class="border-l-4 border-black">کار سوم:</th>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>
    <td><i class="far fa-circle"></i></td>


  </tr>

            
                        </table>
                    </div>
                </div>

            </div>
        </div>    

@endsection


@section('footer-assets')
    <script>
today = new Date();
currentMonth = today.getMonth() -1;
currentYear = today.getFullYear();
selectYear = today.getFullYear();
selectMonth = today.getMonth();

months = ["ژانویه", "Feb", "Mar", "Apr", "May", "Jun", "جولای", "آکوست", "سپتامبر", "اکتبر", "نوامبر", "Dec"];

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
            }
            else if (date > daysInMonth(month, year)) {
                break;
            }

            else {
                cell = document.createElement("th");
                cell.classList.add("font-light");
                cellText = document.createTextNode(date);
                ;
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

function toPersianNum($number)
    {
        $number = str_replace("1","۱",$number);
        $number = str_replace("2","۲",$number);
        $number = str_replace("3","۳",$number);
        $number = str_replace("4","۴",$number);
        $number = str_replace("5","۵",$number);
        $number = str_replace("6","۶",$number);
        $number = str_replace("7","۷",$number);
        $number = str_replace("8","۸",$number);
        $number = str_replace("9","۹",$number);
        $number = str_replace("0","۰",$number);
        return $number;
    }
    </script>
@endsection
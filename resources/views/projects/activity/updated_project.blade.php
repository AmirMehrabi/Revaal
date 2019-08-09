@if (count($activity->changes['after']) == 1)
    شما {{key($activity->changes['after'])}} این پروژه را به روز رسانی کردید
@else
    شما این پروژه را به روز رسانی کردید
@endif
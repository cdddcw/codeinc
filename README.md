# codeinc

/**
 * 获取给定日期的周一和周日
 * @param $day
 * @return array
 */
function getWeekBeginAndEndDay($day)
{
    $timestamp = strtotime($day);
    $w = date('w', $timestamp);
    $weekBeginDay = date('Ymd', $timestamp + 86400 * (1 - $w));
    $weedEndDay = date('Ymd', $timestamp + 86400 * (7 - $w));
    return [$weekBeginDay, $weedEndDay];
}

/**
 * 获取给定日期的月初和月末
 * @param $day
 * @return array
 */
function getMonthBeginAndEndDay($day)
{
    $timestamp = strtotime($day);
    $monthBeginDay = date('Ym01', $timestamp);
    $monthEndDay = date('Ymd', strtotime("$monthBeginDay +1 month -1 day"));
    return [$monthBeginDay, $monthEndDay];
}

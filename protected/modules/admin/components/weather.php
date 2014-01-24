<?php
/*
 * @author iSun
 */
class weather extends CWidget
{
    protected function renderContent()
    {
        $weatherData = $this->weather();
        echo "<li>今日天气：</li>";
        echo "<li><a href='http://www.weather.com.cn/weather/{$weatherData['weather_cityid']}.shtml' target='_blank'>{$weatherData['weather_city']}</a></li>";
        switch ($weatherData['weather'])
        {
            case "晴转多云":
                 echo "<li><a href='http://www.weather.com.cn/weather/{$weatherData['weather_cityid']}.shtml' target='_blank'><img title='今日天气指数 紫外线指数:{$weatherData['weather_uv']}。穿衣指数:{$weatherData['weather_tip']}' height='18' src='/static/image/admincp/weather/a1.png' width='18'></a></li>";
                 break;
            case "多云":
                 echo "<li><a href='http://www.weather.com.cn/weather/{$weatherData['weather_cityid']}.shtml' target='_blank'><img title='今日天气指数 紫外线指数:{$weatherData['weather_uv']}。穿衣指数:{$weatherData['weather_tip']}' height='18' src='/static/image/admincp/weather/a1.png' width='18'></a></li>";
                 break;
            case "阴":
                echo "<li><a href='http://www.weather.com.cn/weather/{$weatherData['weather_cityid']}.shtml' target='_blank'><img title='日天气指数 紫外线指数:{$weatherData['weather_uv']}。穿衣指数:{$weatherData['weather_tip']}' height='18' src='/static/image/admincp/weather/a2.png' width='18'></a></li>";
                break;
            case "阴转多云":
                echo "<li><a href='http://www.weather.com.cn/weather/{$weatherData['weather_cityid']}.shtml' target='_blank'><img title='日天气指数 紫外线指数:{$weatherData['weather_uv']}。穿衣指数:{$weatherData['weather_tip']}' height='18' src='/static/image/admincp/weather/a2.png' width='18'></a></li>";
                break;
            case "多云转阵雨":
                echo "<li><a href='http://www.weather.com.cn/weather/{$weatherData['weather_cityid']}.shtml' target='_blank'><img title='今日天气指数 紫外线指数:{$weatherData['weather_uv']}。穿衣指数:{$weatherData['weather_tip']}' height='18' src='/static/image/admincp/weather/a4.png' width='18'></a></li>";
                break;
            case "阵雨":
                echo "<li><a href='http://www.weather.com.cn/weather/{$weatherData['weather_cityid']}.shtml' target='_blank'><img title='今日天气指数 紫外线指数:{$weatherData['weather_uv']}。穿衣指数:{$weatherData['weather_tip']}' height='18' src='/static/image/admincp/weather/a4.png' width='18'></a></li>";
                break;
            case "阴转小雨":
                echo "<li><a href='http://www.weather.com.cn/weather/{$weatherData['weather_cityid']}.shtml' target='_blank'><img title='今日天气指数 紫外线指数:{$weatherData['weather_uv']}。穿衣指数:{$weatherData['weather_tip']}' height='18' src='/static/image/admincp/weather/a3.png' width='18'></a></li>";
                break;
            case "小雨":
                echo "<li><a href='http://www.weather.com.cn/weather/{$weatherData['weather_cityid']}.shtml' target='_blank'><img title='今日天气指数 紫外线指数:{$weatherData['weather_uv']}。穿衣指数:{$weatherData['weather_tip']}' height='18' src='/static/image/admincp/weather/a3.png' width='18'></a></li>";
                break;
            case "中雨":
                echo "<li><a href='http://www.weather.com.cn/weather/{$weatherData['weather_cityid']}.shtml' target='_blank'><img title='今日天气指数 紫外线指数:{$weatherData['weather_uv']}。穿衣指数:{$weatherData['weather_tip']}' height='18' src='/static/image/admincp/weather/a8.png' width='18'></a></li>";
                break;
            case "大雨":
                echo "<li><a href='http://www.weather.com.cn/weather/{$weatherData['weather_cityid']}.shtml' target='_blank'><img title='今日天气指数 紫外线指数:{$weatherData['weather_uv']}。穿衣指数:{$weatherData['weather_tip']}' height='18' src='/static/image/admincp/weather/a9.png' width='18'></a></li>";
                break;
            case "雨夹雪":
                echo "<li><a href='http://www.weather.com.cn/weather/{$weatherData['weather_cityid']}.shtml' target='_blank'><img title='今日天气指数 紫外线指数:{$weatherData['weather_uv']}。穿衣指数:{$weatherData['weather_tip']}' height='18' src='/static/image/admincp/weather/a6.png' width='18'></a></li>";
                break;
            case "小雪":
                echo "<li><a href='http://www.weather.com.cn/weather/{$weatherData['weather_cityid']}.shtml' target='_blank'><img title='今日天气指数 紫外线指数:{$weatherData['weather_uv']}。穿衣指数:{$weatherData['weather_tip']}' height='18' src='/static/image/admincp/weather/a13.png' width='18'></a></li>";
                break;
            case "中雪":
                echo "<li><a href='http://www.weather.com.cn/weather/{$weatherData['weather_cityid']}.shtml' target='_blank'><img title='今日天气指数 紫外线指数:{$weatherData['weather_uv']}。穿衣指数:{$weatherData['weather_tip']}' height='18' src='/static/image/admincp/weather/a14.png' width='18'></a></li>";
                break;
            case "大雪":
                echo "<li><a href='http://www.weather.com.cn/weather/{$weatherData['weather_cityid']}.shtml' target='_blank'><img title='今日天气指数 紫外线指数:{$weatherData['weather_uv']}。穿衣指数:{$weatherData['weather_tip']}' height='18' src='/static/image/admincp/weather/a15.png' width='18'></a></li>";
                break;
            default:
                 echo"<li><a href='http://www.weather.com.cn/weather/{$weatherData['weather_cityid']}.shtml' target='_blank'><img title='今日天气指数 紫外线指数:{$weatherData['weather_uv']}。穿衣指数:{$weatherData['weather_tip']}' height='18' src='/static/image/admincp/weather/a0.png' width='18'></a></li>";
        }
        echo "<li><a href='http://www.weather.com.cn/weather/{$weatherData['weather_cityid']}.shtml' target='_blank'>{$weatherData['temp']}</a></li>";
    }

    public function run() {
        $this->renderContent();
        // 此方法会被 CController::endWidget() 调用
    }

    function getIP()
    {
        static $realip;
        if (isset($_SERVER)){
            if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
                $realip = $_SERVER["HTTP_X_FORWARDED_FOR"];
            } else if (isset($_SERVER["HTTP_CLIENT_IP"])) {
                $realip = $_SERVER["HTTP_CLIENT_IP"];
            } else {
                $realip = $_SERVER["REMOTE_ADDR"];
            }
        } else {
            if (getenv("HTTP_X_FORWARDED_FOR")){
                $realip = getenv("HTTP_X_FORWARDED_FOR");
            } else if (getenv("HTTP_CLIENT_IP")) {
                $realip = getenv("HTTP_CLIENT_IP");
            } else {
                $realip = getenv("REMOTE_ADDR");
            }
        }
        return $realip;
    }

    function getCity($ip)
    {
        $url="http://ip.taobao.com/service/getIpInfo.php?ip=".$ip;
        $ip=json_decode(file_get_contents($url));
        if((string)$ip->code=='1'){
            return false;
        }
        $data = (array)$ip->data;
        return $data;
    }
    function getWeather($cityId)
    {
        $url="http://m.weather.com.cn/data/".$cityId.".html";
        $weather=json_decode(file_get_contents($url));
        return $weather;
    }
    function json_to_array($web){
        $arr=array();
        foreach($web as $k=>$w){
            if(is_object($w)) $arr[$k]=$this->json_to_array($w); //判断类型是不是object
            else $arr[$k]=$w;
        }
        return $arr;
    }

    //天气插件
    public function weather()
    {

        $ip = $this->getIP();
        $city = $this->getCity('124.90.60.72');
        //$city = $this->getCity($ip);
        $city = str_split($city['city'],strlen($city['city'])-3);
        $city =$city[0];
        $cityUrl = Yii::app()->request->hostInfo."/source/city.php";
        $web=json_decode(file_get_contents($cityUrl));
        $arr=$this->json_to_array($web);
        $info = $this->getWeather($arr[$city]);
        $weatherinfo = array();
        $weatherinfo['weather_cityid']		= $info->weatherinfo->cityid; 	//城市ID
        $weatherinfo['date_year'] 			= $info->weatherinfo->date_y; 	//年份
        $weatherinfo['date_week'] 			= $info->weatherinfo->week;   	//星期
        $weatherinfo['weather_city']    	= $info->weatherinfo->city;   	//城市名字
        $weatherinfo['weather']				= $info->weatherinfo->weather1; //天气状态
        $weatherinfo['temp']				= $info->weatherinfo->temp1;    //温度
        $weatherinfo['weather_uv']			= $info->weatherinfo->index_uv; //紫外线指数
        $weatherinfo['weather_tip']			= $info->weatherinfo->index_d;	//穿衣指数
        return $weatherinfo;
    }
}
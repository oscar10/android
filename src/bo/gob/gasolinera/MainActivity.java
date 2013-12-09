package bo.gob.gasolinera;

import android.os.Bundle;
import org.apache.cordova.DroidGap;

public class MainActivity extends DroidGap
{
    @Override
    public void onCreate(Bundle savedInstanceState)
    {
       super.onCreate(savedInstanceState);
        // Set by <content src="index.html" /> in config.xml
       // super.loadUrl(Config.getStartUrl(),2000);
        //super.loadUrl("file:///android_asset/www/index.html")
       super.setIntegerProperty("splashscreen", R.drawable.splash);
       super.loadUrl("file:///android_asset/www/index.html",17000);
        
    }
}


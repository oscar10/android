package bo.gob.gasolinera;



import android.content.pm.ActivityInfo;
import android.os.Bundle;
import android.util.Log;
import org.apache.cordova.DroidGap;

public class MainActivity extends DroidGap
{

    @Override
    public void onCreate(Bundle savedInstanceState)
    {
       
         if (getResources().getConfiguration().orientation == 1) {
             
        super.setIntegerProperty("splashscreen", R.drawable.splashlandscape);
        Log.d("Orientation", "Landscape"); 
    }
    else {
             
        super.setIntegerProperty("splashscreen", R.drawable.splash);
        Log.d("Orientation", "Portrait");
        // setRequestedOrientation(ActivityInfo.SCREEN_ORIENTATION_PORTRAIT);
    }
       super.onCreate(savedInstanceState);
       super.loadUrl("file:///android_asset/www/index.html",17000);
        
    }
}


package services;

import android.os.AsyncTask;
import android.util.Log;

import java.io.BufferedInputStream;
import java.io.InputStream;
import java.net.HttpURLConnection;
import java.net.URL;

/**
 * Created by admin on 27/11/15.
 */
public class ClientNews extends AsyncTask<String, Void, String> {

    @Override
    protected String doInBackground(String... params) {
        try{
            URL url = new URL(params[0]);
            Log.w("APP", "url ok");

            HttpURLConnection get = (HttpURLConnection) url.openConnection();
            Log.w("APP", "get ok");

            InputStream in = new BufferedInputStream(get.getInputStream());
            Log.w("APP", "steam ok");
            //Log.w("APP", );


            get.disconnect();

        }catch(Exception e){
            System.out.println(e.getMessage());
            Log.e("APP", "error: ->> "+e.getMessage());
        }
        return null;
    }
}

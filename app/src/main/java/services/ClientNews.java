package services;

import android.os.AsyncTask;
import android.util.Log;

import java.io.BufferedInputStream;
import java.io.BufferedWriter;
import java.io.InputStream;
import java.io.OutputStream;
import java.io.OutputStreamWriter;
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

            HttpURLConnection get = (HttpURLConnection) url.openConnection();


            get.setReadTimeout(10000);
            get.setConnectTimeout(15000);
            get.setRequestMethod("GET");
            get.setDoInput(true);
            get.setDoOutput(true);


            Log.w("APP", "get ok");
            Log.w("APP", get.getURL().getProtocol());

            //InputStream in = new BufferedInputStream(get.getInputStream());

            OutputStream os = get.getOutputStream();
            BufferedWriter writer = new BufferedWriter( new OutputStreamWriter(os, "UTF-8"));
            writer.write("");


            writer.flush();
            writer.close();
            os.close();

            Log.w("APP", "enviou.. bom eu acho");
            Log.w("APP", String.valueOf(get.getResponseCode()));

            get.connect();


            return "kookokok";

        }catch(Exception e){
            System.out.println(e.getMessage());
            Log.e("APP", "error: ->> "+e.getMessage());
        }
        return null;
    }
}

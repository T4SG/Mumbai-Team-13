package com.example.implementation;

import java.util.HashMap;
import java.util.Map;

import network.CustomRequest;

import org.json.JSONException;
import org.json.JSONObject;

import android.app.Activity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.Volley;

public class MainActivity extends Activity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_update);
        
        Button btnSave = (Button) findViewById(R.id.btnSave);
        btnSave.setOnClickListener(new View.OnClickListener() {
			
        final String pid = getIntent().getExtras().getString("project_id");
        	
			@Override
			public void onClick(View v) {
				// TODO Auto-generated method stub
				String url="http://ec2-52-74-227-82.ap-southeast-1.compute.amazonaws.com/Android/progress_update.php";
				
				Map<String,String> params = new HashMap<String,String>();
				params.put("project_id", pid);
				params.put("1",((TextView)findViewById(R.id.txt1)).getText().toString());
				params.put("2",((TextView)findViewById(R.id.txt2)).getText().toString());
				params.put("3",((TextView)findViewById(R.id.txt3)).getText().toString());
				params.put("4",((TextView)findViewById(R.id.txt4)).getText().toString());
				params.put("5",((TextView)findViewById(R.id.txt5)).getText().toString());
				params.put("6",((TextView)findViewById(R.id.txt6)).getText().toString());
				params.put("7",((TextView)findViewById(R.id.txt7)).getText().toString());
				
				
				CustomRequest request = new CustomRequest(Request.Method.POST,url,params,new Response.Listener<JSONObject>() {

					@Override
					public void onResponse(JSONObject response) {
						// TODO Auto-generated method stub
						try {
							
							int i = response.getInt("result");
						
							if(i==1)Toast.makeText(getApplicationContext(), "Changes Saved", Toast.LENGTH_SHORT).show();
							else Toast.makeText(getApplicationContext(), "Changes not Saved", Toast.LENGTH_SHORT).show();
						} catch (JSONException e) {
							// TODO Auto-generated catch block
							e.printStackTrace();
						}
						
					}
				},
				new Response.ErrorListener() {

					@Override
					public void onErrorResponse(VolleyError error) {
						// TODO Auto-generated method stub
						
					}
				});

		        RequestQueue queue = Volley.newRequestQueue(getApplicationContext());
		        queue.add(request);
			}
		});
    }
  }
package com.example.implementation;

import java.util.HashMap;
import java.util.Map;

import network.CustomRequest;

import org.json.JSONArray;
import org.json.JSONObject;

import android.app.Activity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.widget.ListView;
import android.widget.Toast;

import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.Volley;

public class HomeActivity extends Activity {

	ListView listView;

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_home);
		final HomeActivity homeActivity = this;
		listView = (ListView) findViewById(R.id.lstSchools);

		RequestQueue queue = Volley.newRequestQueue(getApplicationContext());
		Map<String, String> user_id = new HashMap<String, String>();
		user_id.put("user_id", getIntent().getExtras().getString("user_id"));

				
		CustomRequest schoolsRequest = new CustomRequest(
				Request.Method.POST,
				"http://ec2-52-74-227-82.ap-southeast-1.compute.amazonaws.com/Android/user-project.php",
				user_id, new Response.Listener<JSONObject>() {

					@Override
					public void onResponse(JSONObject response) {
						// TODO Auto-generated method stub
						try{
						Toast.makeText(getApplicationContext(),""+response.toString(), Toast.LENGTH_SHORT).show();
						JSONArray jnames = response.getJSONArray("name");
						JSONArray jbudgets = response.getJSONArray("current_budget");
						JSONArray jbudget_consumed = response.getJSONArray("budget_consumed");
						JSONArray jlocation = response.getJSONArray("location");
						JSONArray jProjectIds = response.getJSONArray("project_id");
						
						
						String[] school_names = new String[jnames.length()];
						String[] locations = new String[jlocation.length()];
						int[] budgets = new int[jbudgets.length()];
						int[] budget_consumed = new int[jbudget_consumed.length()];
						String[] project_id = new String[jProjectIds.length()];
						
						
						for (int i = 0; i < jnames.length(); i++) school_names[i] = jnames.get(i).toString();
						for (int i = 0; i < jlocation.length(); i++) locations[i] = jlocation.get(i).toString();
						for (int i = 0; i < jProjectIds.length(); i++) project_id[i] = jProjectIds.get(i).toString();
						for (int i = 0; i < jbudget_consumed.length(); i++) budget_consumed[i] = jbudget_consumed.getInt(i);
						for (int i = 0; i < jbudgets.length(); i++) budgets[i] = jbudgets.getInt(i);
						
						SchoolListAdapter adapter = new SchoolListAdapter(homeActivity, school_names,
								budgets, budget_consumed, locations);
						listView.setAdapter(adapter);
					}
					catch(Exception e){
						e.printStackTrace();
					}
					}
				}, new Response.ErrorListener() {

					@Override
					public void onErrorResponse(VolleyError error) {
						// TODO Auto-generated method stub

					}
				});
		queue.add(schoolsRequest);
		/*String[] school_names = { "School 1", "School 2", "School 3",
				"School 4", "School 5", "School 6" };
		String[] image_links = { "", "", "", "", "", "" };
		String[] locations = { "Mumbai", "Pune", "London", "Delhi", "Banglore",
				"Hydrabad" };
		int[] budgets = { 20000, 15000, 10000, 12000, 13000, 18000 };
		int[] spents = { 20000, 15000, 10000, 12000, 13000, 18000 };
		*/
		// Define a new Adapter
		// First parameter - Context
		// Second parameter - Layout for the row
		// Third parameter - ID of the TextView to which the data is written
		// Forth - the Array of data

		

	}

	@Override
	public boolean onCreateOptionsMenu(Menu menu) {
		// Inflate the menu; this adds items to the action bar if it is present.
		getMenuInflater().inflate(R.menu.home, menu);
		return true;
	}

	@Override
	public boolean onOptionsItemSelected(MenuItem item) {
		// Handle action bar item clicks here. The action bar will
		// automatically handle clicks on the Home/Up button, so long
		// as you specify a parent activity in AndroidManifest.xml.
		int id = item.getItemId();
		if (id == R.id.action_settings) {
			return true;
		}
		return super.onOptionsItemSelected(item);
	}
}

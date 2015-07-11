package com.example.implementation;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;

public class SchoolListAdapter extends BaseAdapter{

	Context context;
	String[] names;
	String[] image_links;
	String[] locations;
	int[] budgets;
	int[] spents;
	
	private static LayoutInflater inflater=null;
	public SchoolListAdapter(HomeActivity mainactivity,String[] names,int[] budgets,int[] spents,String[] locations,String[] imagePaths){
		this.context = mainactivity.getBaseContext();
		this.names = names;
		this.image_links = imagePaths;
		this.locations = locations;
		this.budgets = budgets;
		this.spents = spents;
		inflater = (LayoutInflater) context.getSystemService(Context.LAYOUT_INFLATER_SERVICE);
		
	}
	
	@Override
	public int getCount() {
		// TODO Auto-generated method stub
		return this.names.length;
	}

	@Override
	public Object getItem(int position) {
		// TODO Auto-generated method stub
		return position;
	}

	@Override
	public long getItemId(int position) {
		// TODO Auto-generated method stub
		return position;
	}


	private class Hold{
		TextView txtname;
		TextView txtlocation;
		TextView txtbudget;
		TextView txtSchoolSpent;
		ImageView imageView;
	}
	
	@Override
	public View getView(final int position, View convertView, ViewGroup parent) {
		// TODO Auto-generated method stub
		
		View rootView = inflater.inflate(R.layout.school_list_item,null);
		Hold h = new Hold();
		h.txtname = (TextView) rootView.findViewById(R.id.txtSchoolName);
		h.txtlocation = (TextView) rootView.findViewById(R.id.txtLocation);
		h.txtbudget = (TextView) rootView.findViewById(R.id.txtBudget);
		h.txtSchoolSpent = (TextView) rootView.findViewById(R.id.txtSpent);
		
		h.txtbudget.setText("budget: "+budgets[position]);
		h.txtname.setText(names[position]);
		h.txtlocation.setText(locations[position]);
		h.txtSchoolSpent.setText("spent: "+spents[position]);
		//h.imageView.setImageBitmap(bm);
		
		rootView.setOnClickListener(new View.OnClickListener() {
			
			@Override
			public void onClick(View v) {
				// TODO Auto-generated method stub
			Toast.makeText(context, "You Clicked "+names[position], Toast.LENGTH_SHORT).show();	
			}
		});
		return rootView;
	}
	
}

<!-- This is going to be the view of our main page of module -->
<div class="sample-container">
		<h1> Testing BMC Module </h1>
	{{ if items_exist == false }}
		<p>There are no items.</p>
	{{ else }}
		<div class="sample-data">
			<table cellpadding="0" cellspacing="0">
				<tr>
					<th>{{ helper:lang line="sample:name" }}</th>
					<th>{{ helper:lang line="sample:slug" }}</th>
				</tr>
				<!-- Here we loop through the $items array -->
				{{ items }}
				<tr>
					<td>{{ name }}</td>
					<td>{{ slug }}</td>
				</tr>
				{{ /items }}
			</table>
		</div>
	
		{{ pagination:links }}
	
	{{ endif }}
	
</div>
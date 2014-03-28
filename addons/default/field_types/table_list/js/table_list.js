function makeTemplate(skillLabel, name, count) {
  var dropdown = '<select class="form-control" name="skills_exp['+count+']"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select>';
  return '<tr><td class="text-center"><input type="text" name="'+name+'"/></td><td class="text-center">'+dropdown+'</td><td class="text-center"><a class="btn btn-sm btn-success add_table_list"><i class="fa fa-plus"></i> Add</a><a class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i> Delete</a></td></tr>';
}
function addItem () {
  var $parent = $(this).parent().parent().parent(); //form
  alert($parent.get(0).tagName);
  var count = $parent.children('tr').length; // # of fields
  var newname = $parent.children().children().children('input').attr('id')+'['+count+']';
  var newLabel = $parent.attr('label')+count;
  var $previousTextarea = $(this).parent().siblings('input');
  if ($previousTextarea.val() !== '') {
    var str = makeTemplate(newLabel, newname, count);
    $parent.append(str);
  } else {
    alert('No Value');
    return false;
  }  
}
$(function(){
  var $this = $(this); // More effiecient
  $this.on('click', '.add_table_list', addItem);
});
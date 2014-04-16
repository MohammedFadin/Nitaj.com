function makeTemplate(skillLabel, name) {
  return '<label class="col-lg-2 control-label">Skill Item '+skillLabel+'</label><div class="col-md-10 input-group"><input type="text" name="'+name+'" class="form-control" placeholder="List item content..."/><span class="input-group-btn"><button class="btn btn-default add" type="button">+</button></span><span class="input-group-btn"><button class="btn btn-default remove" type="button">-</button></span></div>';
}
function addItem () {
  var $parent = $(this).parent().parent().parent(); //form
  var count = $parent.children('.col-md-10').length; // # of fields
  var newname = $parent.children().children('input').attr('id')+'['+count+']';
  var newLabel = $parent.attr('label')+count;
  var $previousTextarea = $(this).parent().siblings('input');
  if ($previousTextarea.val() !== '') {
    var str = makeTemplate(newLabel, newname);
    $parent.append(str);
  } else {
    alert('No Value');
    return false;
  }  
}
$(function(){
  var $this = $(this); // More effiecient
  $this.on('click', '.add', addItem);
});
var ft_list;

function ft_list(task)
{
	if (task != null && task != "")
	{
		var item;
		var newItem;
		var pre = document.cookie;
		item = document.createTextNode(task);
		newItem = document.createElement('div');
		newItem.appendChild(item);
		document.getElementById("ft_list").prepend(newItem);
		newItem.addEventListener("click", remove);
	}
}
function remove()
{
	if (confirm("Are you sure ?"))
	{
		var par = document.getElementById("ft_list")
		par.removeChild(this)
	}
}
cookies()

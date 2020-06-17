const timeLine_cursor = document.querySelector('.js-timeLine-cursor')
const line = document.querySelector('.js-line')
let y_line_top = line.getBoundingClientRect().top
let y_line_bottom = line.getBoundingClientRect().bottom
let value = 0
const  years = 50;
let update = false
let cursor =
    {
        x:0,
        y:0
    }


console.log(y_line_top)
console.log(y_line_bottom)
console.log(timeLine_cursor.getBoundingClientRect().top)

window.addEventListener('mousemove',(_event)=>
{

    if(update){updateCursor(_event)}
    cursor.x = _event.clientX
    cursor.y = _event.clientY
})

timeLine_cursor.addEventListener(
    'mousedown',
    (_event)=>
    {
         update = true
    }
)

window.addEventListener(
    'mouseup',
    (_event)=>
    {
        update = false

    }
)

updateCursor =  (move) =>
{
    const pxChange = move.clientY - cursor.y
    let nextVal = (((pxChange*4)/1450)*600)

    if((value + nextVal) < 0)
    {
        nextVal = 0
        value = 0
    }
    else if((value + nextVal) > 1450)
    {

        nextVal = 1450
    }else
    {
        value += nextVal
        console.log(value + nextVal)
    }

    timeLine_cursor.style.transform = "translateY(" + value + "%)"


}
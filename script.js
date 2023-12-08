// handle button events, and showing of edit panels
//
const createProgressButtonEl = document.querySelector('.create_progress_button');
const createProgressDivEl = document.querySelector('.create_progress');
console.log(createProgressButtonEl);
console.log(createProgressDivEl);
createProgressButtonEl.addEventListener('click', () => {
    createProgressDivEl.classList.toggle('create_progress_hidden')
    console.log('button clicked')
})

function onDeleteClick(tracking_num) {
    console.log("tracking_num: ", tracking_num);
    const deleteProgressEl = document.querySelector('.delete_progress');
    const inputEl = document.getElementById('tracking_num');
    inputEl.setAttribute('value', tracking_num);
    //deleteProgressEl.innerHTML = `Deleting: ${tracking_num}`;
    deleteProgressEl.classList.toggle('delete_progress_hidden');
}

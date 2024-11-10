import './bootstrap';

// Listen for ReactionReceived event
Echo.channel('emoji-reaction')
    .listen('ReactionReceived', (e) => {
        showReactionAnimation(e.emoji, e.id);
    });

function showReactionAnimation(emoji, id) {
    const container = document.getElementById(id);

    const reactionElement = document.createElement('div');
    reactionElement.classList.add('reaction');
    reactionElement.innerText = emoji;

    reactionElement.style.bottom = '5rem';

    container.appendChild(reactionElement);
}

// setTimeout(() => {
//     reactionElement.remove();
// }, 1500);

// reactionElement.addEventListener('animationend', () => {
//     reactionElement.remove();
// });

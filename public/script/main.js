// Track selected rating
let selectedRating = 0;
            
// Add event listeners to each star to handle hover and click
const stars = document.querySelectorAll('.star');

stars.forEach(star => {
    star.addEventListener('mouseover', function() {
        const value = parseInt(this.getAttribute('data-value'));
        highlightStars(value);
    });

    star.addEventListener('mouseout', function() {
        highlightStars(selectedRating);
    });

    star.addEventListener('click', function() {
        selectedRating = parseInt(this.getAttribute('data-value'));
        highlightStars(selectedRating);
    });
});

// Function to highlight stars based on rating
function highlightStars(rating) {
    stars.forEach(star => {
        const value = parseInt(star.getAttribute('data-value'));
        if (value <= rating) {
            star.style.color = 'gold';  // Highlight stars up to selected rating
        } else {
            star.style.color = 'gray';  // Gray out remaining stars
        }
    });
}

// Function to add a new comment
function addComment() {
    const username = document.getElementById('username').value;
    const commentText = document.getElementById('usercomment').value;

    if (username && commentText && selectedRating > 0) {
        // Create new comment elements
        const commentCard = document.createElement('div');
        commentCard.classList.add('comment-card');
        
        const userImage = document.createElement('img');
        userImage.src = '/image/default-profile.png'; // Default image for new comments
        userImage.alt = username;
        
        const userName = document.createElement('p');
        userName.innerHTML = `<strong>${username}</strong>`;
        
        const userComment = document.createElement('p');
        userComment.textContent = `"${commentText}"`;
        
        const interactionDiv = document.createElement('div');
        interactionDiv.classList.add('interaction');

        // Create and add the star rating display to the new comment
        const starRating = document.createElement('div');
        starRating.classList.add('stars');
        for (let i = 1; i <= 5; i++) {
            const star = document.createElement('span');
            star.classList.add('star');
            star.textContent = '⭐';
            star.style.color = (i <= selectedRating) ? 'gold' : 'gray';
            starRating.appendChild(star);
        }

        // Add likes and comments count (can be dynamically updated)
        const likes = document.createElement('span');
        likes.classList.add('likes');
        likes.textContent = '0 Likes';
        
        const commentCount = document.createElement('span');
        commentCount.classList.add('comments');
        commentCount.textContent = '0 Comments';
        
        // Append all elements to the comment card
        interactionDiv.appendChild(starRating);
        interactionDiv.appendChild(likes);
        interactionDiv.appendChild(document.createTextNode(' | '));
        interactionDiv.appendChild(commentCount);

        commentCard.appendChild(userImage);
        commentCard.appendChild(userName);
        commentCard.appendChild(userComment);
        commentCard.appendChild(interactionDiv);

        // Append the new comment to the comments grid
        document.getElementById('commentsGrid').appendChild(commentCard);

        // Clear the form
        document.getElementById('username').value = '';
        document.getElementById('usercomment').value = '';
        selectedRating = 0;
        highlightStars(0);
    } else {
        alert('Please provide a name, comment, and rating.');
    }
}
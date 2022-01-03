<template>
    <div class="chat-conversation">
        <ul class="conversation-list nicescroll">
            <li class="clearfix odd">
                <div class="chat-avatar">
                    <img src="gambar_user/avatar-8.jpg" alt="Female">
                    <i>{{chats.created_at}}</i>
                </div>
                <div class="conversation-text">
                    <div class="ctext-wrap">
                        <i>{{ chats.user}}</i>
                        <p>
                            {{ chats.message}}
                        </p>
                    </div>
                </div>
            </li>
        </ul>
    </div>   
</template>

<script>
    export default {
        props: ['chats']
    }
</script>
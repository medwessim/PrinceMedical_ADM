<template>
    <main class="container min-h-content mb-3 mt-5">
        <h1 class="h3 mb-3"><i class="bi bi-chat-left-dots-fill"></i> Messages</h1>

        <div class="card chat-card">
            <div class="row g-0">
                <ChatSidebar @renderChat="renderChat" />
                <!-- <ChatBox v-if="startChat" :chat_id="chatId" /> -->
            </div>
        </div>
    </main>
</template>
<script>
// import ChatBox from "../ChatBox.vue"
import ChatSidebar from "../ChatSide.vue"
export default {

    components: { ChatSidebar },
    data() {
        return {
            chatId: null,
            startChat: false
        }
    },
    methods: {
        /*
        * To open a new chat 
        *we pass this method to ChatSidebar component
        */
        renderChat(chat_id) {
            this.chatId = null
            this.chatId = chat_id
            this.startChat = true;
            console.log("chatId", chat_id);
        },
    },

}
</script>

<style>
.min-h-content {
    min-height: calc(100vh - 82px - 148px);
}

.chat-card {
    min-height: 70vh;
}

.chat-online {
    color: #34ce57
}

.chat-offline {
    color: #e4606d
}

.chat-messages {
    display: flex;
    flex-direction: column;
    min-height: 400px;
    max-height: 500px;
    overflow-y: scroll
}

.messsage-container {
    min-height: 125px;
}

.chat-message-left,
.chat-message-right {
    display: flex;
    flex-shrink: 0
}

.chat-message-left {
    margin-right: auto
}

.chat-message-right {
    flex-direction: row-reverse;
    margin-left: auto
}

.chat-message-left .message-box {
    background-color: rgb(143, 240, 240);
}

.chat-message-right .message-box {
    background-color: #88f5a1;
}

.py-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
}

.px-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
}

.flex-grow-0 {
    flex-grow: 0 !important;
}

.border-top {
    border-top: 1px solid #dee2e6 !important;
}</style>
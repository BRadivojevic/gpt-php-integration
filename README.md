# GPT PHP Integration

Simple PHP endpoints for Chat/Completion/Text-to-Speech (safely configurable).

## Setup
1) Copy `.env.example` → `.env` and insert API key.
2) Deploy `public/` behind HTTPS.

## Safety
- Clamp prompt size.
- Hide stack traces in production.
- Log request IDs, not raw prompts.

# Nextcloud welcome widget

ℹ A Markdown rendering Dashboard widget to welcome all users.

⚙ Configure via `Settings > Administration > Theming > Welcome widget`

📄 Pick a Markdown document to be rendered in the widget

💡 If no document is chosen, the widget won't be shown

📝 Edit the Markdown document to update the widget in real-time

🖼 Images are also supported

💬 Configure a contact person to directly start a chat with (requires [Nextcloud Talk](https://apps.nextcloud.com/apps/spreed) to be installed)

### Dashboard layout

Once the app is installed, if you want the Welcome widget to be displayed by default on new users dashboard, change the default dashboard layout:

```
occ config:app:set dashboard layout --value=welcome,recommendations,spreed,mail,calendar
```

### Screenshot

![Welcome widget example](img/screenshot1.jpg)
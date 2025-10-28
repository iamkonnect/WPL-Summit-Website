# WPL Summit Theme Installation Guide

## Prerequisites
- WordPress 6.0+
- Hello Elementor Theme
- Elementor Plugin
- Elementor Pro (Recommended)

## Installation Steps

### 1. Install Parent Theme
1. Go to Appearance > Themes
2. Click "Add New"
3. Search for "Hello Elementor"
4. Install and activate

### 2. Install Child Theme
1. Zip the `wpl-summit-child` folder
2. Go to Appearance > Themes > Add New > Upload Theme
3. Upload the zip file and activate

### 3. Install Required Plugins
Install and activate these plugins:
- Elementor
- Elementor Pro (if available)
- Advanced Custom Fields
- Custom Post Type UI
- Contact Form 7

### 4. Setup Menus
1. Go to Appearance > Menus
2. Create two menus:
   - Primary Menu (for header)
   - Footer Menu (for footer links)
3. Assign to appropriate locations

### 5. Create Pages
Create these pages and set templates:
- Home: Select "Homepage" template
- Speakers: Select "Speakers" template
- About: Default template
- Agenda: Default template
- Register: Default template
- Contact: Default template

### 6. Setup Homepage
1. Go to Settings > Reading
2. Set "Your homepage displays" to "A static page"
3. Select "Home" as homepage

### 7. Configure Permalinks
1. Go to Settings > Permalinks
2. Select "Post name"
3. Save changes

## Importing Elementor Templates

1. **Install Elementor & Elementor Pro**
   - Go to Plugins > Add New
   - Install and activate Elementor and Elementor Pro

2. **Import Templates**
   - Go to Templates > Saved Templates in Elementor
   - Click "Import Templates"
   - Upload each JSON file from the `elementor-templates` folder

3. **Use Templates**
   - When editing a page with Elementor, click the folder icon
   - Select "My Templates" to use your imported templates

## Importing Plugin Configurations

1. **Advanced Custom Fields (ACF)**
   - Install and activate ACF Pro
   - Go to Custom Fields > Tools
   - Select "Import"
   - Upload `acf-fields-export.json` from plugin-configs folder
   - Click "Import JSON"

2. **Custom Post Type UI**
   - Install and activate Custom Post Type UI plugin
   - Go to CPT UI > Tools
   - Import the JSON from `custom-post-types-export.json`
   - This will create the Speakers, Agenda, and Sponsors post types

## Demo Content Installation

After installing the theme and plugins, you can install demo content:

1. **Automatic Demo Content** (Recommended):
   - The theme will automatically create basic pages and menus on activation
   - Go to Appearance > Menus to verify the primary menu was created

2. **Manual Demo Content Import**:
   - Use the demo content JSON files as reference
   - Add content through the respective admin menus

## Customization

### Colors
Colors are defined in CSS variables in `style.css`:
- Primary: #AC43A9 (Purple)
- Secondary: #FFFFFF (White)
- Accent: #000000 (Black)

### Adding Content
- Speakers: Use "Speakers" post type
- Agenda: Use "Agenda" post type  
- Sponsors: Use "Sponsors" post type

## Support
For technical support, contact your developer or refer to the theme documentation.

## TAS Guinea Website Features Replicated:

✅ **Hero section** with gradient background and CTA buttons  
✅ **About section** with summit description  
✅ **Speakers grid** with photos and details  
✅ **Agenda timeline** with session details  
✅ **Sponsors section** with logo grid  
✅ **News/Blog section** with latest updates  
✅ **Contact information** and forms  
✅ **Responsive design** for all devices  
✅ **Modern purple/black/white color scheme**
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Eddy Lu</title>
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <style>
      .codeSnippet {
        background-color: rgba(0,0,0,0.05);
        padding: 22px;
        font-family: Consolas;
        border-radius: 10px;
      }

      .blogImage {
        display: table;
        margin: 0 auto;
        max-width: 100%;
      }

      .caption {
        display: table;
        margin: 0 auto;
        font-style: italic;
        margin-top: 8px;
      }
						
      .blog-story {
        margin: 0 auto;
        width: 100%;
        max-width: 800px;
      }
    </style>
  </head>
  <body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/header.php'; ?>
    <div id="container">
      <div class="blog-story">
        <div style="font-weight: bold; font-size: 48px;">Circular profile pictures in Android vs. React Native</div>
        <div style="font-style: italic; margin-top: 22px;">Friday, December 28, 2018</div>
      </div>
      <div class="blog-story" style="line-height: 1.50; margin-top: 50px">

        <img class="blogImage" src="/assets/images/blog/20181228/blog20181228_example.png" />
        <span class="caption">Circular profile pictures are used on virtually every social platform, including Facebook</span>

        <p>While working on a personal mobile application project, I wanted to render a profile picture. There has been a wide-spread trend where profile pictures are rendered as circles instead of the classic rectangle. In UX design, circular profile pictures have been proven to be easier for the human eye to visually process. Thus, circular profile pictures are implemented virtually on every modern social web/mobile platform.</p>
        
        <p>For some analysis on the benefits of circular profile pictures, take a look at this article from UX Movement.</p>
        
        <p>When developing my own application, I discovered that the implementation of these circular profile pictures is actually quite complex when writing in native Android code. Later on, I attempted to re-implement the same circular profile picture logic using React Native which I found to have significantly simplified the development process.</p>

        <p>Thus, I have decided to demonstrate and compare my personal implementations of these circular profile pictures via native Android code and React native.</p>

        <img class="blogImage" src="/assets/images/blog/20181228/blog20181228_android_and_react_native.png" />

        <h1>NATIVE ANDROID</h1>

        <h2>Defining the image component</h2>

        <p>As with any typical native Android component, one should first define the component in a layout file. In this case, we have begun the process of creating our circular profile picture by first defining a basic Image View component.</p>

        <pre class="codeSnippet">
&lt;ImageView
  android:id="@+id/userProfileProfilePicture"
  android:layout_width="150dp"
  android:layout_height="150dp"
  android:layout_centerHorizontal="true" /&gt;
        </pre>

        <p>At this point, if we add an image source, the profile picture will simply render as a rectangle:</p>

        <img class="blogImage" style="max-height: 300px;" src="/assets/images/blog/20181228/blog20181228_mister_meeseeks_cropped.jpg" />
        <span class="caption">My profile picture before editing</span>

        <p>If we wish to programmatically edit this newly defined view, then we need to define a Drawable in a Java class that is linked to the Image View using the view's ID.</p>

        <pre class="codeSnippet">
@Override
protected void onCreate(Bundle savedInstanceState) {
  ImageView profilePicture = (ImageView)findViewById(R.id.userProfileProfilePicture);
  profilePicture.setImageDrawable(getUserProfilePictureDrawable(id));
}
        </pre>

        <h2>Shaping the image into a circle</h2>

        <p>One useful tool in the native Android SDK is the <span style="font-weight: bold;">RoundedBitmapDrawable</span> class that contains a method dedicated to forming rounded drawables. However, before we can use this functionality, we must first crop our image into a square; otherwise we will eventually form an ellipse.</p>

        <img class="blogImage" src="/assets/images/blog/20181228/blog20181228_circular_image.png" />
        <span class="caption">
Image cropped into a circle</span>

        <p>The Android Bitmap class contains a <span style="font-weight: bold;">createBitmap()</span> method which allows us to crop an existing bitmap while defining the exact pixel in which we wish to begin cropping in both the x and y-directions, as well as the desired dimensions of the final shape. Since this method requires a bitmap as an imput, we must, unfortunately, convert the existing Drawable image into a bitmap, before re-converting the image back into a Drawable for the step of rounding the edges. One must be aware that the image that we wish to crop may be a rectangle in which the width is greater than the height or vice-versa. Thus, we must account for these two scenarios when determining our starting pixels for cropping the images.</p>

        <pre class="codeSnippet">
int width = bmp.getWidth();
int height = bmp.getHeight();
int firstPixelX, firstPixelY;
if (width > height) {
  firstPixelX = (width — height) / 2;
  firstPixelY = 0;
}
else {
  firstPixelX = 0;
  firstPixelY = (height — width) / 2;
} 
bmp = Bitmap.createBitmap(bmp, firstPixelX, firstPixelY, bmp.getHeight(), bmp.getHeight());
        </pre>

        <h2>Adding the border</h2>

        <p>Surprisingly, Android does not naturally incorporate any native implementation for appending borders to images. The <a target="_blank" href="https://stackoverflow.com/questions/3496269/how-do-i-put-a-border-around-an-android-textview">current acceptable method of creating a border is actually by rendering the image within a container shape with a given padding that will act as the border width</a>.</p>

        <img class="blogImage" src="/assets/images/blog/20181228/blog20181228_border.png" />
        <span class="caption">The image is placed on top of a circle of slightly greater size</span>

        <p>Container shape that will act as the border:</p>

        <pre class="codeSnippet">
&lt;shape android:shape="oval"&gt;
  &lt;solid android:color="#FFFFFF"/&gt;
&lt;/shape&gt;
        </pre>

        <p>Placing our Image View within our newly created shape with a defined padding:</p>

        <pre class="codeSnippet">
&lt;FrameLayout
  android:layout_width="wrap_content"
  android:layout_height="wrap_content"
  android:gravity="center"
  android:background="@drawable/profile_picture_border"
  android:padding="8dp"&gt;
  &lt;ImageView
    android:id="@+id/userProfileProfilePicture"
    android:layout_width="150dp"
    android:layout_height="150dp"
    android:layout_centerHorizontal="true" /&gt;
&lt;/FrameLayout&gt;
        </pre>

        <h2>Adding the shadow</h2>

        <p>If adding the border was not complicated enough, then adding the shadow will be an even more exciting experience. Interestingly, Android natively includes an elevation attribute that forms a natural shadow behind components. However, this shadow is not customizable… After searching around the internet, it seems that a <a target="_blank" href="https://stackoverflow.com/questions/21211870/android-view-shadow">common implementation that allows for customization involves placing the image on top (in the z-direction) of another shape of equal size with a gradient</a>.</p>

        <img class="blogImage" src="/assets/images/blog/20181228/blog20181228_shadow.png" />
        <span class="caption">The profile picture and border are placed on top of a misaligned gradient that acts as a shadow</span>

        <pre class="codeSnippet">
&lt;shape
  xmlns:android="http://schemas.android.com/apk/res/android"
  android:shape="oval"&gt;
  &lt;gradient
    android:type="radial"
    android:gradientRadius="150dp"
    android:startColor="#7F333333"
    android:endColor="#00FFFFFF" /&gt;
    &lt;size
      android:height="150dp"
      android:width="150dp"/&gt;
&lt;/shape&gt;
        </pre>

        <p>In order for the user to see the shadow behind the image, we have to intentionally misalign the underlying gradient shape; this misalignment acts as our shadow offset. We will also have to define our image after the definition of the gradient shape in our layout file. This is due to the fact that the latest defined components are rendered on top (in the z-dimension). This allows the developer to avoid using the z-index attribute, which is very dangerous when many components are rendered in the application at once.</p>

        <img class="blogImage" src="/assets/images/blog/20181228/blog20181228_finished.png" />
        <span class="caption">The finished product</span>

        <h2>Complete Source-Code</h2>
        <span style="font-style: italic;">(Takes a while just to even scroll through…)</span>

        <p>activity_circular_profile_picture.xml</p>

        <pre class="codeSnippet">
&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;android.support.constraint.ConstraintLayout
  android:layout_width="match_parent"
  android:layout_height="match_parent">
  &lt;RelativeLayout
    android:layout_width="fill_parent"
    android:layout_height="fill_parent"
    tools:layout_editor_absoluteX="0dp"
    tools:layout_editor_absoluteY="0dp">
    &lt;FrameLayout
      android:layout_width="wrap_content"
      android:layout_height="wrap_content"
      android:gravity="center"
      android:background="@drawable/profile_picture_border"
      android:padding="8dp">
      &lt;ImageView
        android:id="@+id/userProfileProfilePicture"
        android:layout_width="150dp"
        android:layout_height="150dp"
        android:layout_centerHorizontal="true" /&gt;
    &lt;/FrameLayout&gt;
  &lt;/RelativeLayout&gt;
&lt;/android.support.constraint.ConstraintLayout&gt;
        </pre>

        <p>CircularProfilePictureActivity.java</p>

        <pre class="codeSnippet">
public class CreateCircularProfilePicture extends Activity {
  private int MOBILE_DEVICE_DENSITY = 160; // Based on device
  private int DESIRED_IMAGE_WIDTH = 150;
  @Override
  protected void onCreate(Bundle savedInstanceState) {
    ImageView profilePicture = (ImageView)findViewById(R.id.userProfileProfilePicture);
    profilePicture.setImageDrawable(getUserProfilePictureDrawable(id));
  }
  public Drawable createCircularProfilePicture(Drawable image) {
    // Convert image from Drawable to Bitmap
    Bitmap bmp = BitmapFactory.decodeResource(this.getAppContext(), image);

    // Crop image into square
    int width = bmp.getWidth();
    int height = bmp.getHeight();
    int firstPixelX, firstPixelY;
    if (width > height) {
      firstPixelX = (width — height) / 2;
      firstPixelY = 0;
    }
    else {
      firstPixelX = 0;
      firstPixelY = (height — width) / 2;
    } 
    bmp = Bitmap.createBitmap(bmp, firstPixelX, firstPixelY, bmp.getHeight(), bmp.getHeight());

    // Created rounded Drawable
    RoundedBitmapDrawable drawable = RoundedBitmapDrawableFactory.create(this.getResources(), bmp);
    drawable.setCornerRadius(150 * DENSITY);

    return drawable;
  }
}
        </pre>

        <p>profile_picture_border.xml</p>

        <pre class="codeSnippet">
&lt;?xml version="1.0" encoding="UTF-8"?&gt;
<layer-list xmlns:android="http://schemas.android.com/apk/res/android">
  &lt;item&gt;
    &lt;shape
      xmlns:android="http://schemas.android.com/apk/res/android"
      android:shape="oval"&gt;
      &lt;gradient
        android:type="radial"
        android:gradientRadius="150dp"
        android:startColor="#7F333333"
        android:endColor="#00FFFFFF" /&gt;
      &lt;size
        android:height="150dp"
        android:width="150dp"/&gt;
    &lt;/shape&gt;
  &lt;/item&gt;
  &lt;item
    android:left="2dp"
    android:right="2dp"
    android:top="2dp"
    android:bottom="2dp"&gt;
    &lt;shape android:shape="oval"&gt;
      &lt;solid android:color="#FFFFFF"/&gt;
    &lt;/shape&gt;
  &lt;/item&gt;
&lt;/layer-list&gt;
        </pre>

        <h1>REACT NATIVE</h1>

        <p>Implementing these circular profile pictures in React Native is much simpler.</p>

        <h2>Defining the image component</h2>

        <p>First, one would need to define the image component; this can easily be done using React Native's JSX syntax:</p>

        <pre class="codeSnippet">
&lt;Image
  source={profilePictureSrc}
/&gt;
        </pre>

        <h2>Shaping the image into a circle</h2>

        <p>To shape the image into a circle in React Native, one simply uses the CSS border-radius attribute, setting this attribute to 50 % of the width/height of the shape:</p>

        <pre class="codeSnippet">
&lt;Image
  source={profilePictureSrc} 
  style={{
    width: DESIRED_IMAGE_WIDTH,
    height: DESIRED_IMAGE_WIDTH,
    borderRadius: DESIRED_IMAGE_WIDTH / 2
  }}
/&gt;
        </pre>

        <h2>Adding the border</h2>

        <p>The border can also easily be appended as style attributes:</p>

        <pre class="codeSnippet">
&lt;Image
  source={profilePictureSrc} 
  style={{
    width: DESIRED_IMAGE_WIDTH,
    height: DESIRED_IMAGE_WIDTH,
    borderRadius: DESIRED_IMAGE_WIDTH / 2,
    borderWidth: 5,
    borderColor: "#FFFFFF"
  }}
/&gt;
        </pre>

        <h2>Adding the shadow</h2>

        <p>In React Native, shadows are implemented via dedicated style attributes for shadow offsets, colours, and opacities. However, the shadow attributes are only available to certain components such as the View component. Thus, we have to wrap the image component in a view component before using these styles.</p>

        <p>There is a <a target="_blank" href="https://stackoverflow.com/questions/44908580/react-native-shadow-not-appearing/44908751">known issue in which the style shadow attributes are not successfully applied for certain Android devices</a>. A current workaround for this issue involves using the elevation style attribute for container View component. However, similar to using the elevation attribute in native Android development, developers will not be able to customize the shadows.</p>

        <pre class="codeSnippet">
&lt;View
  style={{
    borderRadius: DESIRED_IMAGE_WIDTH / 2,
    shadowOffset: {
      width: 1, height: 1
    },
    shadowColor: "#333333",
    shadowOpacity: 0.5
  }}&gt;
  &lt;Image
    source={profilePictureSrc} 
    style={{
      width: DESIRED_IMAGE_WIDTH,
      height: DESIRED_IMAGE_WIDTH,
      borderRadius: DESIRED_IMAGE_WIDTH / 2,
      borderWidth: 5,
      borderColor: "#FFFFFF"
    }} /&gt;
&lt;/View&gt;
        </pre>

        <p>And that's it!</p>

        <h2>Complete Source-Code</h2>

        <p>CircularProfilePicture.js</p>

        <pre class="codeSnippet">
export default class CircularProfilePicture extends React.Component {
  render() {
    const DESIRED_IMAGE_WIDTH = 150;
    return (
      &lt;View
        style={{
          borderRadius: DESIRED_IMAGE_WIDTH / 2,
          shadowOffset: {
            width: 1, height: 1
          },
          shadowColor: "#333333",
          shadowOpacity: 0.5
        }}&gt;
        &lt;Image
          source={profilePictureSrc} 
          style={{
            width: DESIRED_IMAGE_WIDTH,
            height: DESIRED_IMAGE_WIDTH,
            borderRadius: DESIRED_IMAGE_WIDTH / 2,
            borderWidth: 5,
            borderColor: "#FFFFFF"
          }} /&gt;
      &lt;/View&gt;
    );
  }
}
        </pre>

        <img class="blogImage" style="max-height: 500px;" src="/assets/images/blog/20181228/blog20181228_flat_earth.png" />
        <span class="caption">An interesting benefit of using circles to display profile pictures…</span>
        
        <h1>Conclusion</h1>

        <p>Overall, implementing circular profile pictures in native Android code is significantly more complex than when using React Native. There are obviously many reasons why one would still use native Android over React Native when developing their projects. However, if you ever wish to quickly hack up a circular profile picture in a small project, I would definitely recommend using React Native.</p>

      </div>
    </div>               
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/footer.php'; ?>
  </body>
</html>
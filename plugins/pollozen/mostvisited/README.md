#Most Visited Post for [RainLab Blog](https://octobercms.com/plugin/rainlab-blog)

Plugin to register visits to [RainLab Blog](https://octobercms.com/plugin/rainlab-blog) Blog Publications and create a list of the most visited posts in a period of time

##Installing the watcher
**IMPORTANT**

In order to register the visit to a Publication `RegisterVisit` component must be added to Post Page

##Create a most visited posts list
Add the `TopVisitedComponent`

This component has parameters

**Most Visited From** - The time period to get the most visited publications

- Today
- Current Week
- Last Week
- All the time

**Category filter**

You can select a category filter, this way you can get the Top 10 from a particular category. If no category is selected, the component will retrieve the top 10 from all your publications

**Top**

How many publications must be retrieved

###Examples

Using these three parameters you can construct different lists. Eg.

- **Last week**, top **10** from **local news**
- **Today** top **5** from **all the site**
- Top **10** from **all the site** in **all the time**

###Displaying the results
The `TopVisitedComponent` inject the **mostVisitedPosts**   object



Use as you already use the RainLab blog post

```
{% for post in mostVisitedPosts %}
<div class="post">
	<div class="postImage"><img alt="" src="{{post.featured_images[0].path}}"></div>
		<div class="post-content">
			<h3>{{post.title}}</h3>
			<a href="{{post.url}}">Continue reading</a>
		</div>
	</div>
{% endfor %}
```

##Support and bugs reporting
You can write in the forum or visit me in [Github](https://github.com/sanPuerquitoProgramador/most-visited-posts)